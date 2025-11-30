<x-layout :hideFooter="true">

    <!-- Container Utama -->
    <div class="min-h-[85vh] flex items-center justify-center py-10 px-4">
        
        <!-- Card Wrapper (Split Layout) -->
        <div class="flex flex-col md:flex-row w-full max-w-6xl bg-[#F5E6CA] rounded-[2.5rem] shadow-2xl overflow-hidden min-h-[600px]">
            
            <!-- BAGIAN KIRI: AREA GAME INTERAKTIF -->
            <div class="w-full md:w-1/2 p-8 md:p-12 flex flex-col justify-center items-center text-center relative">
                
                <!-- SCENE 1: PERTANYAAN (Default Visible) -->
                <div id="quiz-scene" class="w-full transition-opacity duration-300">
                    <h1 class="text-3xl font-bold text-[#3E2F2B] mb-6">Games</h1>
                    
                    <!-- Gambar Soal -->
                    <div class="w-full h-56 rounded-2xl overflow-hidden shadow-lg mb-6 bg-gray-200">
                        <img id="question-image" src="" class="w-full h-full object-cover">
                    </div>

                    <!-- Teks Soal -->
                    <h2 id="question-text" class="text-xl font-medium text-[#3E2F2B] mb-8">
                        Loading...
                    </h2>

                    <!-- Pilihan Jawaban (Grid 2x2) -->
                    <div id="options-container" class="grid grid-cols-2 gap-4 w-full">
                        <!-- Buttons will be injected here by JS -->
                    </div>
                </div>

                <!-- SCENE 2: JAWABAN BENAR (Hidden) -->
                <div id="win-scene" class="hidden w-full flex-col items-center animate-fade-in">
                    <img src="https://cdn-icons-png.flaticon.com/512/4128/4128373.png" class="w-48 h-48 mb-6 drop-shadow-lg">
                    <h2 class="text-3xl font-bold text-[#3E2F2B] mb-8">Terima Kasih!</h2> <!-- Teks sesuai gambar -->
                    
                    <div class="flex gap-4">
                        <button onclick="nextLevel()" class="px-8 py-3 bg-[#756A60] text-white rounded-full font-semibold hover:bg-[#5e544d] transition shadow-md">
                            Lagi
                        </button>
                        <a href="/" class="px-8 py-3 bg-[#756A60] text-white rounded-full font-semibold hover:bg-[#5e544d] transition shadow-md">
                            Kembali
                        </a>
                    </div>
                </div>

                <!-- SCENE 3: JAWABAN SALAH (Hidden) -->
                <div id="lose-scene" class="hidden w-full flex-col items-center animate-fade-in">
                    <img src="https://cdn-icons-png.flaticon.com/512/1828/1828843.png" class="w-48 h-48 mb-6 drop-shadow-lg opacity-80">
                    <h2 class="text-3xl font-bold text-[#3E2F2B] mb-8">Maaf, Anda Salah!</h2>
                    
                    <div class="flex gap-4">
                        <button onclick="restartLevel()" class="px-8 py-3 bg-[#756A60] text-white rounded-full font-semibold hover:bg-[#5e544d] transition shadow-md">
                            Ulangi
                        </button>
                        <a href="/" class="px-8 py-3 bg-[#756A60] text-white rounded-full font-semibold hover:bg-[#5e544d] transition shadow-md">
                            Kembali
                        </a>
                    </div>
                </div>

            </div>

            <!-- BAGIAN KANAN: STATIC INFO -->
            <div class="w-full md:w-1/2 bg-[#756A60] p-10 md:p-14 flex flex-col justify-center text-white relative">
                <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-8">
                    Welcome To Games <br>
                    Kampung Budaya <br>
                    Ketawang Gede
                </h1>

                <p class="text-white/80 text-xl leading-relaxed font-light">
                    Ayoo pahami sampai mana kemampuan andaa!!!
                </p>
            </div>

        </div>
    </div>

    <!-- JAVASCRIPT LOGIC -->
    <script>
        // DATA SOAL (Bisa ditambah)
        const questions = [
            {
                image: "https://asset.kompas.com/crops/O_R7Xb8Q-d0u4zF10q5vKqK5wQA=/0x0:1000x667/750x500/data/photo/2020/03/10/5e675b7b9b6d8.jpg", // Tari Saman
                text: "Dari Mana Tari Saman Berasal?",
                options: ["Sulawesi", "Sumatra", "Kalimantan", "Aceh"],
                answer: "Aceh"
            },
            {
                image: "https://upload.wikimedia.org/wikipedia/commons/thumb/c/c6/Gudeg_Jogja.jpg/1200px-Gudeg_Jogja.jpg", // Gudeg
                text: "Dari Mana Gudeg Berasal?",
                options: ["Bandung", "Semarang", "Jogja", "Solo"],
                answer: "Jogja"
            },
            {
                image: "https://asset.kompas.com/crops/F-w5x_q4X_q4X_q4X_q4X_q4X_q4=/0x0:0x0/750x500/data/photo/2021/09/22/614b0b0b0b0b0.jpg", // Reog (Placeholder Reog)
                text: "Dari Mana Reog Berasal?",
                options: ["Probolinggo", "Ponorogo", "Jember", "Malang"],
                answer: "Ponorogo"
            }
        ];

        let currentQuestionIndex = 0;

        // Elements
        const quizScene = document.getElementById('quiz-scene');
        const winScene = document.getElementById('win-scene');
        const loseScene = document.getElementById('lose-scene');
        const imgEl = document.getElementById('question-image');
        const textEl = document.getElementById('question-text');
        const optionsContainer = document.getElementById('options-container');

        // Initialize First Question
        function loadQuestion() {
            const currentQ = questions[currentQuestionIndex];
            
            // Reset Scenes
            quizScene.classList.remove('hidden');
            winScene.classList.add('hidden');
            loseScene.classList.add('hidden');

            // Set Content
            imgEl.src = currentQ.image;
            textEl.innerText = currentQ.text;
            
            // Clear old buttons
            optionsContainer.innerHTML = '';

            // Create Buttons
            currentQ.options.forEach(opt => {
                const btn = document.createElement('button');
                btn.innerText = opt;
                btn.className = "py-3 px-2 bg-[#756A60] text-white rounded-full font-medium hover:bg-[#5e544d] hover:scale-105 transition shadow-md w-full";
                btn.onclick = () => checkAnswer(opt);
                optionsContainer.appendChild(btn);
            });
        }

        // Logic Check Answer
        function checkAnswer(selectedOption) {
            const correctAnswer = questions[currentQuestionIndex].answer;

            quizScene.classList.add('hidden'); // Sembunyikan soal

            if (selectedOption === correctAnswer) {
                winScene.classList.remove('hidden'); // Tampilkan 'Terima Kasih'
                winScene.classList.add('flex');
            } else {
                loseScene.classList.remove('hidden'); // Tampilkan 'Maaf Salah'
                loseScene.classList.add('flex');
            }
        }

        // Tombol 'Lagi' (Soal Berikutnya)
        function nextLevel() {
            currentQuestionIndex++;
            if (currentQuestionIndex >= questions.length) {
                currentQuestionIndex = 0; // Reset ke awal jika habis
            }
            loadQuestion();
        }

        // Tombol 'Ulangi' (Soal yang sama)
        function restartLevel() {
            loadQuestion();
        }

        // Start
        loadQuestion();
    </script>

</x-layout>