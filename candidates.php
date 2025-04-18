<?php

// Candidate data array with example photos
$candidates = [
    ['name'=>'Vinay Kumar ','image'=>'vinay.jpg','description'=>'Background in business and passionate about community development.'],
    ['name'=>'Tanishka Jain','image'=>'https://randomuser.me/api/portraits/women/22.jpg','description'=>'Experienced educator focusing on enhancing educational resources.'],
    ['name'=>'Tannu Kumari','image'=>'https://randomuser.me/api/portraits/men/33.jpg','description'=>'Healthcare professional aiming to improve public health services.'],
    ['name'=>'Sohan Kumar Kamat','image'=>'https://randomuser.me/api/portraits/women/44.jpg','description'=>'Tech enthusiast working towards innovation and digital empowerment.'],
    ['name'=>'Riya Kumari','image'=>'https://randomuser.me/api/portraits/men/55.jpg','description'=>'Lawyer advocating for justice and equal rights for all.'],
    ['name'=>'Soni Kumari','image'=>'https://randomuser.me/api/portraits/women/66.jpg','description'=>'Environmentalist focusing on green initiatives and sustainability.'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Our Candidates</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.2/dist/tailwind.min.css" rel="stylesheet">
  <style>
    /* Fade-in Up Animation */
    @keyframes fadeInUp {
      0% { opacity: 0; transform: translateY(20px); }
      100% { opacity: 1; transform: translateY(0); }
    }
    /* Float animation */
    @keyframes float {
      0%,100% { transform: translateY(0); }
      50% { transform: translateY(-8px); }
    }
    .fade-in { animation: fadeInUp 0.8s ease-out forwards; }
    .float { animation: float 3s ease-in-out infinite; }
  </style>
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">

  <header class="bg-blue-600 text-white py-4 text-center text-2xl font-bold">
    Online Voting System
  </header>

  <main class="container mx-auto py-10 flex-grow">
    <h1 class="text-3xl font-bold text-center mb-8">Meet Our Candidates</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
      <?php foreach ($candidates as $i => $c): ?>
        <div class="bg-white shadow-lg rounded-xl p-6 text-center h-96 flex flex-col justify-between fade-in float" style="animation-delay: <?= $i * 0.1 ?>s;">
          <img src="<?= $c['image'] ?>" alt="<?= $c['name'] ?>"
               class="mx-auto rounded-full border-4 border-gray-200
                      transition-transform duration-500 hover:scale-110"
               style="width:200px; height:200px; object-fit:cover;">
          <div>
            <h2 class="text-xl font-semibold mt-4 text-gray-800"><?= $c['name'] ?></h2>
            <p class="text-gray-600 mt-2"><?= $c['description'] ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </main>

  <!-- Footer -->
  <footer class="bg-blue-800 text-gray-200 py-6">
    <div class="container mx-auto flex flex-col md:flex-row items-center justify-between">
      <div class="text-center md:text-left mb-4 md:mb-0">
        <h3 class="text-lg font-bold">Online Voting System</h3>
        <p class="text-sm">Empowering your community with transparent, secure elections.</p>
      </div>
      <ul class="flex space-x-6 mb-4 md:mb-0">
        <li><a href="#" class="hover:text-white">Home</a></li>
        <li><a href="#" class="hover:text-white">Candidates</a></li>
        <li><a href="#" class="hover:text-white">Results</a></li>
        <li><a href="#" class="hover:text-white">Contact</a></li>
      </ul>
      <div class="flex space-x-4">
        <a href="#" aria-label="Facebook" class="hover:text-white">
          <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M22 12a10 10 0 10-11.5 9.9v-7h-2v-3h2v-2.3c0-2 1.2-3.1 3-3.1.9 0 1.8.1 2 .1v2.3h-1.2c-1 0-1.3.6-1.3 1.3V12h2.5l-.4 3h-2.1v7A10 10 0 0022 12z"/></svg>
        </a>
        <a href="#" aria-label="Twitter" class="hover:text-white">
          <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M23 3a10.9 10.9 0 01-3.1.8 5.4 5.4 0 002.4-3c-.9.5-1.9.8-2.9 1A5.2 5.2 0 0016.1 2c-2.9 0-5 2.4-5 5.2 0 .4 0 .8.1 1.1A14.7 14.7 0 013 4.5a5.2 5.2 0 001.6 6.9A5 5 0 012 10v.1c0 2.6 1.9 4.8 4.4 5.3a5.3 5.3 0 01-2.3.1 5.3 5.3 0 004.8 3.7A10.5 10.5 0 012 19.5a14.7 14.7 0 007.9 2.3c9.4 0 14.5-7.8 14.5-14.6l-.1-.7A10.2 10.2 0 0023 3z"/></svg>
        </a>
        <a href="#" aria-label="LinkedIn" class="hover:text-white">
          <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M4.98 3.5A2.48 2.48 0 002.5 6v12a2.48 2.48 0 002.48 2.5h12a2.48 2.48 0 002.52-2.5V6A2.48 2.48 0 0019.48 3.5h-12zM8 17H5.5v-7H8v7zM6.75 9.75A1.25 1.25 0 116 8.5a1.25 1.25 0 01.75 1.25zM18.5 17h-2.5v-3.5c0-.8-.3-1.3-1-1.3s-1 .5-1 1.3V17h-2.5v-7H14v1h.1a2.7 2.7 0 012.4-1.3c1.9 0 3.5 1.3 3.5 4V17z"/></svg>
        </a>
      </div>
    </div>
    <div class="text-center text-xs mt-6">&copy; 2025 Online Voting System. All rights reserved.</div>
  </footer>

</body>
</html>
