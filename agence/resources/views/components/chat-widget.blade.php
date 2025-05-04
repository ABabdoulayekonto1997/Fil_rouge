<div class="fixed bottom-4 right-4 z-50">
    <!-- Bouton du chat -->
    <button id="chat-toggle" class="w-14 h-14 bg-[#0C4069] rounded-full flex items-center justify-center text-white shadow-lg hover:bg-[#D88F42] transition-colors duration-300">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
        </svg>
    </button>

    <!-- Fenêtre de chat -->
    <div id="chat-window" class="hidden absolute bottom-16 right-0 w-80 bg-white rounded-lg shadow-xl">
        <div class="p-4 bg-[#0C4069] text-white rounded-t-lg flex justify-between items-center">
            <h3 class="font-semibold">Assistant virtuel</h3>
            <button id="chat-close" class="hover:text-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </button>
        </div>
        
        <div id="chat-messages" class="h-80 overflow-y-auto p-4 space-y-2">
            <div class="bg-gray-100 p-2 rounded-lg">
                <p class="text-sm">👋 Bonjour ! Comment puis-je vous aider aujourd'hui ?</p>
            </div>
        </div>

        <div class="p-4 border-t">
            <div class="flex gap-2">
                <input type="text" id="chat-input" 
                    class="flex-1 rounded-lg border border-gray-300 p-2 text-sm focus:outline-none focus:border-[#D88F42]" 
                    placeholder="Écrivez votre message...">
                <button onclick="sendMessage()" 
                    class="bg-[#D88F42] text-white px-4 py-2 rounded-lg hover:bg-[#0C4069] transition-colors duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const chatToggle = document.getElementById('chat-toggle');
    const chatWindow = document.getElementById('chat-window');
    const chatClose = document.getElementById('chat-close');
    const chatInput = document.getElementById('chat-input');

    chatToggle.addEventListener('click', function() {
        chatWindow.classList.toggle('hidden');
    });

    chatClose.addEventListener('click', function() {
        chatWindow.classList.add('hidden');
    });

    chatInput.addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            sendMessage();
        }
    });
});

function sendMessage() {
    const input = document.getElementById('chat-input');
    const messages = document.getElementById('chat-messages');
    
    if (input.value.trim() !== '') {
        // Message de l'utilisateur
        const userMessage = document.createElement('div');
        userMessage.className = 'bg-[#0C4069] text-white p-2 rounded-lg ml-8';
        userMessage.innerHTML = `<p class="text-sm">${input.value}</p>`;
        messages.appendChild(userMessage);
        
        // Réponse automatique
        setTimeout(() => {
            const botMessage = document.createElement('div');
            botMessage.className = 'bg-gray-100 text-gray-800 p-2 rounded-lg';
            botMessage.innerHTML = `<p class="text-sm">Je vais vous aider avec votre demande concernant "${input.value}"</p>`;
            messages.appendChild(botMessage);
            
            messages.scrollTop = messages.scrollHeight;
        }, 1000);
        
        input.value = '';
        messages.scrollTop = messages.scrollHeight;
    }
}
</script>