<x-layout :hideFooter="true">

    <!-- Container Utama -->
    <div class="min-h-[85vh] flex items-center justify-center py-10 px-4">
        
        <!-- Card Wrapper -->
        <div class="flex flex-col md:flex-row w-full max-w-6xl bg-[#F5E6CA] rounded-[2.5rem] shadow-2xl overflow-hidden min-h-[600px]">
            
            <!-- BAGIAN KIRI: AREA GAME INTERAKTIF -->
            <div class="w-full md:w-1/2 p-8 md:p-12 flex flex-col justify-center items-center text-center relative">
                
                <!-- INDIKATOR PROGRESS (Soal 1/3) -->
                <div id="progress-indicator" class="absolute top-6 right-8 text-[#756A60] font-bold text-sm bg-white px-3 py-1 rounded-full shadow-sm hidden">
                    Soal <span id="current-step">1</span>/<span id="total-step">3</span>
                </div>

                <!-- SCENE 1: PERTANYAAN -->
                <div id="quiz-scene" class="w-full transition-opacity duration-300">
                    <h1 class="text-3xl font-bold text-[#3E2F2B] mb-6">Games Kuis</h1>
                    
                    <div class="w-full h-56 rounded-2xl overflow-hidden shadow-lg mb-6 bg-gray-200 group relative">
                        <img id="question-image" src="" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                    </div>

                    <h2 id="question-text" class="text-xl font-medium text-[#3E2F2B] mb-8 min-h-[3rem]">
                        Loading...
                    </h2>

                    <div id="options-container" class="grid grid-cols-2 gap-4 w-full">
                        <!-- Buttons injected by JS -->
                    </div>
                </div>

                <!-- SCENE 2: JAWABAN BENAR -->
                <div id="win-scene" class="hidden w-full flex-col items-center animate-fade-in">
                    <img src="https://cdn-icons-png.flaticon.com/512/4128/4128373.png" class="w-40 h-40 mb-6 drop-shadow-lg animate-bounce">
                    <h2 class="text-3xl font-bold text-green-600 mb-2">Benar!</h2>
                    <p class="text-[#3E2F2B] mb-8">+100 Poin</p>
                    
                    <button onclick="nextLevel()" class="px-10 py-3 bg-[#756A60] text-white rounded-full font-bold hover:bg-[#5e544d] transition shadow-lg transform hover:-translate-y-1">
                        Lanjut
                    </button>
                </div>

                <!-- SCENE 3: JAWABAN SALAH -->
                <div id="lose-scene" class="hidden w-full flex-col items-center animate-fade-in">
                    <img src="https://cdn-icons-png.flaticon.com/512/1828/1828843.png" class="w-40 h-40 mb-6 drop-shadow-lg opacity-80">
                    <h2 class="text-3xl font-bold text-red-500 mb-2">Salah!</h2>
                    <p class="text-[#3E2F2B] mb-2">Jawaban yang benar adalah:</p>
                    <p id="correct-answer-text" class="font-bold text-lg text-kb-orange mb-8">...</p>
                    
                    <button onclick="nextLevel()" class="px-10 py-3 bg-[#756A60] text-white rounded-full font-bold hover:bg-[#5e544d] transition shadow-lg transform hover:-translate-y-1">
                        Lanjut
                    </button>
                </div>

                <!-- SCENE 4: HASIL SKOR AKHIR (REKAP) -->
                <div id="finish-scene" class="hidden w-full flex-col items-center animate-fade-in">
                    <img id="score-image" src="" class="w-40 h-40 mb-4 drop-shadow-lg">
                    
                    <h2 class="text-2xl font-bold text-[#3E2F2B]">Permainan Selesai!</h2>
                    
                    <div class="my-6 text-center">
                        <p class="text-gray-500 text-sm uppercase tracking-widest mb-1">Skor Kamu</p>
                        <h1 class="text-6xl font-black text-[#756A60]">
                            <span id="final-score">0</span><span class="text-2xl text-gray-400 font-medium">/300</span>
                        </h1>
                        <p id="score-message" class="text-[#A85D36] font-medium mt-2">Hebat!</p>
                    </div>
                    
                    <div class="flex gap-4">
                        <a href="/games" class="px-8 py-3 bg-[#756A60] text-white rounded-full font-semibold hover:bg-[#5e544d] transition shadow-md">
                            Main Lagi
                        </a>
                        <a href="/" class="px-8 py-3 bg-gray-200 text-gray-700 rounded-full font-semibold hover:bg-gray-300 transition shadow-md">
                            Beranda
                        </a>
                    </div>
                </div>

            </div>

            <!-- BAGIAN KANAN: STATIC INFO -->
            <div class="w-full md:w-1/2 bg-[#756A60] p-10 md:p-14 flex flex-col justify-center text-white relative">
                <div class="absolute top-0 right-0 w-64 h-64 bg-white/5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>
                
                <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-8 relative z-10">
                    Seberapa Tahu <br>
                    Kamu Tentang <br>
                    Budaya Kita?
                </h1>

                <p class="text-white/80 text-xl leading-relaxed font-light relative z-10">
                    Jawab 3 pertanyaan acak dan buktikan pengetahuanmu!
                </p>
            </div>

        </div>
    </div>

    <!-- JAVASCRIPT LOGIC -->
    <script>
        // Ambil data dari Controller
        const questions = @json($questions);
        
        // Variabel Game
        let currentQuestionIndex = 0;
        let score = 0; // Total skor
        let correctCount = 0; // Jumlah jawaban benar

        // Elements DOM
        const quizScene = document.getElementById('quiz-scene');
        const winScene = document.getElementById('win-scene');
        const loseScene = document.getElementById('lose-scene');
        const finishScene = document.getElementById('finish-scene');
        const progressIndicator = document.getElementById('progress-indicator');
        
        const imgEl = document.getElementById('question-image');
        const textEl = document.getElementById('question-text');
        const optionsContainer = document.getElementById('options-container');
        const correctAnswerText = document.getElementById('correct-answer-text');

        // Elements Skor Akhir
        const finalScoreEl = document.getElementById('final-score');
        const scoreMessageEl = document.getElementById('score-message');
        const scoreImageEl = document.getElementById('score-image');

        function loadQuestion() {
            // Jika soal kosong (Database kosong)
            if (questions.length === 0) {
                textEl.innerText = "Belum ada soal tersedia.";
                optionsContainer.innerHTML = '';
                imgEl.style.display = 'none';
                return;
            }

            // Jika soal sudah habis (Selesai 3 soal)
            if (currentQuestionIndex >= questions.length) {
                showFinish();
                return;
            }

            const currentQ = questions[currentQuestionIndex];
            
            // Update Tampilan
            quizScene.classList.remove('hidden');
            winScene.classList.add('hidden');
            loseScene.classList.add('hidden');
            finishScene.classList.add('hidden');
            
            // Update Indikator Progress
            progressIndicator.classList.remove('hidden');
            document.getElementById('current-step').innerText = currentQuestionIndex + 1;
            document.getElementById('total-step').innerText = questions.length;

            // Set Konten Soal
            imgEl.src = currentQ.image;
            textEl.innerText = currentQ.text;
            
            // Reset Tombol
            optionsContainer.innerHTML = '';

            // Acak urutan jawaban
            const shuffledOptions = [...currentQ.options].sort(() => Math.random() - 0.5);

            shuffledOptions.forEach(opt => {
                const btn = document.createElement('button');
                btn.innerText = opt;
                btn.className = "py-3 px-2 bg-[#756A60] text-white rounded-full font-medium hover:bg-[#5e544d] hover:scale-105 transition shadow-md w-full text-sm md:text-base";
                btn.onclick = () => checkAnswer(opt, currentQ.answer);
                optionsContainer.appendChild(btn);
            });
        }

        function checkAnswer(selectedOption, correctAnswer) {
            quizScene.classList.add('hidden');
            progressIndicator.classList.add('hidden');

            if (selectedOption === correctAnswer) {
                // BENAR
                score += 100; // Tambah 100 poin
                correctCount++;
                winScene.classList.remove('hidden'); 
                winScene.classList.add('flex');
            } else {
                // SALAH
                correctAnswerText.innerText = correctAnswer; // Kasih tau jawaban yg benar
                loseScene.classList.remove('hidden'); 
                loseScene.classList.add('flex');
            }
        }

        function nextLevel() {
            currentQuestionIndex++;
            loadQuestion();
        }

        function showFinish() {
            // Sembunyikan semua scene game
            quizScene.classList.add('hidden');
            winScene.classList.add('hidden');
            loseScene.classList.add('hidden');
            progressIndicator.classList.add('hidden');

            // Tampilkan Scene Finish
            finishScene.classList.remove('hidden');
            finishScene.classList.add('flex');

            // Set Data Skor
            finalScoreEl.innerText = score;

            // Logika Pesan & Gambar berdasarkan skor
            if (correctCount === 3) {
                scoreMessageEl.innerText = "Sempurna! Kamu Jenius Budaya!";
                scoreImageEl.src = "https://png.pngtree.com/png-vector/20250408/ourlarge/pngtree-golden-award-medal-png-image_15968670.png"; // Piala Emas
            } else if (correctCount === 2) {
                scoreMessageEl.innerText = "Bagus Sekali! Hampir Sempurna.";
                scoreImageEl.src = "https://img.freepik.com/vektor-premium/emoticon-jempol-ke-atas_1303870-11.jpg?semt=ais_hybrid&w=740&q=80"; // Jempol
            } else if (correctCount === 1) {
                scoreMessageEl.innerText = "Lumayan, Tetap Semangat Belajar!";
                scoreImageEl.src = "https://img.freepik.com/vektor-premium/emoji-emoticon-bahagia-mengangkat-tinju-yang-mengepal-membuat-gerakan-menang-atau-merayakan_1303870-395.jpg?semt=ais_hybrid&w=740&q=80"; // Semangat
            } else {
                scoreMessageEl.innerText = "Jangan Menyerah, Coba Lagi Ya!";
                scoreImageEl.src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSFaJ1ymYNq27_hiMJLfonju7M0XHfQDJ7Mqg&s"; // Sedih
            }
        }

        // Mulai
        document.addEventListener('DOMContentLoaded', loadQuestion);
    </script>

</x-layout>