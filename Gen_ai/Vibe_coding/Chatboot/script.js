const chatForm = document.querySelector("#chatForm");
const promptInput = document.querySelector("#promptInput");
const conversation = document.querySelector("#conversation");
const welcomeState = document.querySelector("#welcomeState");
const attachmentTray = document.querySelector("#attachmentTray");
const fileInput = document.querySelector("#fileInput");
const sendButton = document.querySelector("#sendButton");
const newChatButton = document.querySelector("#newChat");
const clearChatButton = document.querySelector("#clearChat");
const keyButton = document.querySelector("#keyButton");
const keyDialog = document.querySelector("#keyDialog");
const keyForm = document.querySelector("#keyForm");
const apiKeyInput = document.querySelector("#apiKeyInput");
const attachments = [];
const model = "gpt-6-astra";

function escapeHtml(value) {
  return value.replace(
    /[&<>'"]/g,
    (character) =>
      ({ "&": "&amp;", "<": "&lt;", ">": "&gt;", "'": "&#39;", '"': "&quot;" })[
        character
      ],
  );
}

function renderAttachments() {
  attachmentTray.innerHTML = "";
  attachmentTray.hidden = attachments.length === 0;
  attachments.forEach((file, index) => {
    const item = document.createElement("div");
    item.className = "attachment";
    const preview = file.type.startsWith("image/")
      ? `<img src="${URL.createObjectURL(file)}" alt="">`
      : "<span>▧</span>";
    item.innerHTML = `${preview}<span class="attachment-name">${escapeHtml(file.name)}</span><button class="remove-file" type="button" data-index="${index}" aria-label="Remove ${escapeHtml(file.name)}">×</button>`;
    attachmentTray.appendChild(item);
  });
}

fileInput.addEventListener("change", () => {
  attachments.push(...Array.from(fileInput.files));
  fileInput.value = "";
  renderAttachments();
});

attachmentTray.addEventListener("click", (event) => {
  const removeButton = event.target.closest(".remove-file");
  if (!removeButton) return;
  attachments.splice(Number(removeButton.dataset.index), 1);
  renderAttachments();
});

function addMessage(role, text, files = [], imageUrl = "") {
  welcomeState.hidden = true;
  const message = document.createElement("div");
  message.className = `message ${role}`;
  const avatar = role === "user" ? "AM" : "✦";
  const fileText = files.length
    ? `\n\nAttached: ${files.map((file) => file.name).join(", ")}`
    : "";
  const content = document.createElement("div");
  content.className = "message-body";
  content.textContent = text + fileText;
  if (imageUrl) {
    const image = document.createElement("img");
    image.className = "generated-image";
    image.src = imageUrl;
    image.alt = text || "Generated image";
    image.loading = "lazy";
    content.appendChild(image);
  }
  const messageContent = document.createElement("div");
  const meta = document.createElement("div");
  meta.className = "message-meta";
  meta.textContent = role === "user" ? "Just now" : "Clarity · Just now";
  messageContent.append(content, meta);
  const messageAvatar = document.createElement("div");
  messageAvatar.className = "message-avatar";
  messageAvatar.textContent = avatar;
  message.append(messageAvatar, messageContent);
  conversation.appendChild(message);
  conversation.scrollTop = conversation.scrollHeight;
}

function showTyping() {
  const typing = document.createElement("div");
  typing.className = "message";
  typing.id = "typing";
  typing.innerHTML =
    '<div class="message-avatar">✦</div><div class="message-body typing"><i></i><i></i><i></i></div>';
  conversation.appendChild(typing);
  conversation.scrollTop = conversation.scrollHeight;
}

function demoResponse(prompt, files) {
  if (files.some((file) => file.type.startsWith("image/"))) {
    return `I can see your image attachment. In a live AI connection, I would analyze it alongside your prompt. For now, here is a useful starting point for “${prompt}”:\n\n1. Describe what stands out.\n2. Identify the feeling or message it creates.\n3. Decide what you would like to change or explore next.`;
  }
  return `That is a thoughtful starting point. Here is a clear way to move forward:\n\n• Define the outcome you want.\n• Break the idea into the smallest useful next step.\n• Test it quickly, then improve what you learn.\n\nYour prompt was: “${prompt}”\n\nThis is demo mode. Connect a server-side /api/chat route to enable live AI responses securely.`;
}

async function getResponse(prompt, files) {
  const apiKey = sessionStorage.getItem("openai_api_key");
  if (!apiKey)
    return "Add your OpenAI API key with the API key button above, then send your message again.";

  if (isImageRequest(prompt)) return generateImage(prompt, apiKey);

  const content = [{ type: "input_text", text: prompt }];
  for (const file of files) {
    if (file.type.startsWith("image/")) {
      content.push({
        type: "input_image",
        image_url: await readAsDataUrl(file),
        detail: "auto",
      });
    } else if (
      /^(text\/|application\/json)/.test(file.type) ||
      /\.(txt|md|csv|json)$/i.test(file.name)
    ) {
      content.push({
        type: "input_text",
        text: `File: ${file.name}\n${await file.text()}`,
      });
    } else {
      content.push({
        type: "input_text",
        text: `Attached file: ${file.name} (${file.type || "unknown type"}).`,
      });
    }
  }

  try {
    const response = await fetch("https://api.openai.com/v1/responses", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
        Authorization: `Bearer ${apiKey}`,
      },
      body: JSON.stringify({ model, input: [{ role: "user", content }] }),
    });
    const data = await response.json();
    if (!response.ok)
      throw new Error(data.error?.message || "OpenAI request failed.");
    return extractResponseText(data);
  } catch (error) {
    return `OpenAI could not answer: ${error.message}`;
  }
}

function isImageRequest(prompt) {
  return /\b(generate|create|make|draw|design|image|picture|illustration|logo|poster)\b/i.test(
    prompt,
  );
}

async function generateImage(prompt, apiKey) {
  try {
    const response = await fetch(
      "https://api.openai.com/v1/images/generations",
      {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
          Authorization: `Bearer ${apiKey}`,
        },
        body: JSON.stringify({
          model: "gpt-image-2.5-flare",
          prompt,
          size: "1024x1024",
          quality: "auto",
        }),
      },
    );
    const data = await response.json();
    if (!response.ok)
      throw new Error(data.error?.message || "Image generation failed.");
    const image = data.data?.[0];
    const imageUrl = image?.b64_json
      ? `data:image/png;base64,${image.b64_json}`
      : image?.url;
    if (!imageUrl) throw new Error("OpenAI returned no image data.");
    return { text: "Here is the image I created from your prompt:", imageUrl };
  } catch (error) {
    return { text: `OpenAI could not generate the image: ${error.message}` };
  }
}

function extractResponseText(data) {
  if (typeof data.output_text === "string" && data.output_text.trim()) {
    return data.output_text.trim();
  }

  const responseText = (data.output || [])
    .flatMap((item) => item.content || [])
    .filter(
      (item) => item.type === "output_text" && typeof item.text === "string",
    )
    .map((item) => item.text.trim())
    .filter(Boolean)
    .join("\n");
  if (responseText) return responseText;

  const completionText = data.choices?.[0]?.message?.content;
  if (typeof completionText === "string" && completionText.trim()) {
    return completionText.trim();
  }

  throw new Error(
    "OpenAI returned a successful response without any text. Check the selected model and response permissions.",
  );
}

function readAsDataUrl(file) {
  return new Promise((resolve, reject) => {
    const reader = new FileReader();
    reader.onload = () => resolve(reader.result);
    reader.onerror = reject;
    reader.readAsDataURL(file);
  });
}

async function sendMessage(text = promptInput.value.trim()) {
  if (!text && !attachments.length) return;
  const sentFiles = [...attachments];
  addMessage("user", text || "Please review these attachments.", sentFiles);
  promptInput.value = "";
  attachments.length = 0;
  renderAttachments();
  promptInput.style.height = "auto";
  sendButton.disabled = true;
  showTyping();
  const response = await getResponse(
    text || "Please review these attachments.",
    sentFiles,
  );
  document.querySelector("#typing")?.remove();
  const assistantResponse =
    typeof response === "string" ? { text: response } : response;
  addMessage(
    "assistant",
    assistantResponse.text,
    [],
    assistantResponse.imageUrl,
  );
  sendButton.disabled = false;
  promptInput.focus();
}

chatForm.addEventListener("submit", (event) => {
  event.preventDefault();
  sendMessage();
});
promptInput.addEventListener("keydown", (event) => {
  if (event.key === "Enter" && !event.shiftKey) {
    event.preventDefault();
    sendMessage();
  }
});
promptInput.addEventListener("input", () => {
  promptInput.style.height = "auto";
  promptInput.style.height = `${Math.min(promptInput.scrollHeight, 150)}px`;
});
document.querySelectorAll(".suggestion").forEach((button) =>
  button.addEventListener("click", () => {
    promptInput.value = button.dataset.prompt;
    promptInput.focus();
  }),
);

function resetChat() {
  conversation.innerHTML = "";
  conversation.appendChild(welcomeState);
  welcomeState.hidden = false;
  attachments.length = 0;
  renderAttachments();
  promptInput.value = "";
}
newChatButton.addEventListener("click", resetChat);
clearChatButton.addEventListener("click", resetChat);

keyButton.addEventListener("click", () => {
  apiKeyInput.value = sessionStorage.getItem("openai_api_key") || "";
  keyDialog.showModal();
});
keyForm.addEventListener("submit", (event) => {
  if (event.submitter?.id !== "saveKey") return;
  const key = apiKeyInput.value.trim();
  if (key) sessionStorage.setItem("openai_api_key", key);
  else sessionStorage.removeItem("openai_api_key");
});
