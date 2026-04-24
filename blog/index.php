<?php
$siteTitle = "Personal Blog";
$author = "Ryan Paras";
$greeting = "Hello, I'm Ryan Busty DC. Paras";
$tagline = "Every setback is a setup for a comeback";
$navItems = ["About Me", "Interest", "Contact"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $siteTitle; ?></title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Tailwind Config for custom colors and animations -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        bgMain: '#0f1115',
                        bgCard: '#1c1f2a',
                        accent: '#c1121f',
                        accentGradient: 'linear-gradient(90deg,#c1121f,#ff3b3b)'
                    },
                    keyframes: {
                        fadeSlide: {
                            '0%': { opacity: '0', transform: 'translateY(20px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                        fadeSlideDelay: {
                            '0%': { opacity: '0', transform: 'translateY(10px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        }
                    },
                    animation: {
                        fadeSlide: 'fadeSlide 1s ease-out forwards',
                        fadeSlideDelay: 'fadeSlideDelay 1s ease-out 0.3s forwards'
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-bgMain text-gray-200 font-sans">

<!-- NAVBAR -->
<nav class="sticky top-0 z-30 bg-bgMain/80 backdrop-blur-md border-b border-white/5">
    <div class="max-w-6xl mx-auto flex justify-center gap-12 py-5 text-sm uppercase tracking-widest">
        <?php 
        foreach ($navItems as $item) {
            echo "<a href='#' class='relative text-gray-400 hover:text-white transition'>" 
                 . $item 
                 . "<span class='absolute left-0 bottom-0 w-0 h-0.5 bg-accent transition-all duration-300 group-hover:w-full'></span></a>";
        } 
        ?>
    </div>
</nav>

<!-- HERO -->
<section class="relative text-center py-32 px-4 overflow-hidden">
    <!-- Background gradient shapes -->
    <div class="absolute -top-20 -left-20 w-96 h-96 bg-accent/20 rounded-full filter blur-3xl animate-pulse"></div>
    <div class="absolute -bottom-32 -right-32 w-96 h-96 bg-accent/30 rounded-full filter blur-3xl animate-pulse"></div>

    <?php
    echo "<img src='me.jpg' alt='Profile Image' class='relative z-10 mx-auto mb-8 w-80 max-w-full rounded-xl shadow-2xl hover:-translate-y-2 transition-transform duration-500'>";
    echo "<h1 class='relative z-10 text-4xl md:text-5xl font-serif mb-3 animate-fadeSlide'>{$greeting}</h1>";
    echo "<p class='relative z-10 max-w-xl mx-auto text-gray-400 text-lg animate-fadeSlideDelay'>{$tagline}</p>";
    ?>
</section>

<!-- CONTENT -->
<main class="max-w-4xl mx-auto px-6 py-20 space-y-12">
    <?php
    echo "<article class='bg-bgCard border border-white/5 rounded-2xl p-10 shadow-2xl hover:-translate-y-3 hover:shadow-3xl transition-transform duration-300 relative overflow-hidden'>";
    echo "<div class='absolute left-0 top-0 h-full w-1 bg-gradient-to-b from-accent to-red-600 rounded-l-xl opacity-70'></div>";
    echo "<h2 class='text-2xl font-serif mb-4 relative z-10'>Why I took BSIT?</h2>";
    echo "<p class='text-gray-300 relative z-10'>From a very young age, I have always been fascinated by technology and how it shapes the modern world.</p>";
    echo "</article>";

    echo "<article class='bg-bgCard border border-white/5 rounded-2xl p-10 shadow-2xl hover:-translate-y-3 hover:shadow-3xl transition-transform duration-300 relative overflow-hidden'>";
    echo "<div class='absolute left-0 top-0 h-full w-1 bg-gradient-to-b from-accent to-red-600 rounded-l-xl opacity-70'></div>";
    echo "<h2 class='text-2xl font-serif mb-4 relative z-10'>Why I took WST?</h2>";
    echo "<p class='text-gray-300 relative z-10'>I want to improve and enhance my skills when it comes to web design and user experience.</p>";
    echo "</article>";
    ?>
</main>

<!-- FOOTER -->
<footer class="border-t border-white/5 text-center py-12 text-sm text-gray-400">
    <?php echo "<p>&copy; 2026 " . $author . "</p>"; ?>
    <?php echo "<p>" . $siteTitle . " WS03</p>"; ?>
</footer>
</body>
</html>
