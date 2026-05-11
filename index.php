<?php session_start(); ?>

<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>QuickPOS - Modern Point of Sale</title>

<script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gray-50 text-gray-800 font-sans">


<header class="bg-white shadow-sm sticky top-0 z-50">

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">

<div class="text-2xl font-bold text-blue-600">QuickPOS</div>

<nav class="hidden md:flex space-x-8">

<a href="#features" class="text-gray-600 hover:text-blue-600">Features</a>

<a href="#pricing" class="text-gray-600 hover:text-blue-600">Pricing</a>

<a href="#contact" class="text-gray-600 hover:text-blue-600">Contact</a>

</nav>

<a href="#pricing" class="bg-blue-600 text-white px-5 py-2 rounded-lg font-semibold hover:bg-blue-700">Sign Up</a>

</div>

</header>


<section class="bg-blue-50 py-20 text-center">

<div class="max-w-4xl mx-auto px-4">

<h1 class="text-5xl font-extrabold text-gray-900 mb-6">Manage Your Store with Ease</h1>

<p class="text-xl text-gray-600 mb-8">The lightning-fast, cloud-based POS system designed for modern retail and restaurants.</p>

<a href="#contact" class="bg-blue-600 text-white px-8 py-4 rounded-lg text-lg font-bold hover:bg-blue-700 shadow-lg transition duration-300">Get Started Today</a>

</div>

</section>


<section id="features" class="py-20">

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">

<h2 class="text-3xl font-bold mb-12">Why Choose QuickPOS?</h2>

<div class="grid grid-cols-1 md:grid-cols-3 gap-8">

<div class="bg-white p-6 rounded-xl shadow-md">

<div class="text-4xl mb-4">⚡</div>

<h3 class="text-xl font-bold mb-2">Lightning Fast</h3>

<p class="text-gray-600">Process transactions in milliseconds, keeping your lines moving.</p>

</div>

<div class="bg-white p-6 rounded-xl shadow-md">

<div class="text-4xl mb-4">☁️</div>

<h3 class="text-xl font-bold mb-2">Cloud Synced</h3>

<p class="text-gray-600">Access your sales data and inventory from anywhere, anytime.</p>

</div>

<div class="bg-white p-6 rounded-xl shadow-md">

<div class="text-4xl mb-4">📊</div>

<h3 class="text-xl font-bold mb-2">Deep Analytics</h3>

<p class="text-gray-600">Understand your business better with built-in advanced reporting.</p>

</div>

</div>

</div>

</section>


<section id="pricing" class="bg-gray-100 py-20">

<div class="max-w-7xl mx-auto px-4 text-center">

<h2 class="text-3xl font-bold mb-12">Simple Pricing</h2>

<div class="grid grid-cols-1 md:grid-cols-3 gap-8">

<div class="bg-white p-8 rounded-xl shadow-md border border-gray-200">

<h3 class="text-2xl font-bold mb-4">Basic</h3>

<p class="text-4xl font-extrabold mb-6">$29<span class="text-lg text-gray-500 font-normal">/mo</span></p>

<ul class="text-gray-600 mb-8 space-y-2">

<li>1 Register</li>

<li>Basic Reporting</li>

<li>Email Support</li>

</ul>

<a href="#contact" class="block w-full bg-blue-100 text-blue-600 py-2 rounded-lg font-bold">Select Plan</a>

</div>

<div class="bg-blue-600 p-8 rounded-xl shadow-xl text-white transform scale-105">

<h3 class="text-2xl font-bold mb-4">Pro</h3>

<p class="text-4xl font-extrabold mb-6">$79<span class="text-lg text-blue-200 font-normal">/mo</span></p>

<ul class="text-blue-100 mb-8 space-y-2">

<li>Up to 5 Registers</li>

<li>Advanced Analytics</li>

<li>24/7 Support</li>

</ul>

<a href="#contact" class="block w-full bg-white text-blue-600 py-2 rounded-lg font-bold">Select Plan</a>

</div>

<div class="bg-white p-8 rounded-xl shadow-md border border-gray-200">

<h3 class="text-2xl font-bold mb-4">Enterprise</h3>

<p class="text-4xl font-extrabold mb-6">Custom</p>

<ul class="text-gray-600 mb-8 space-y-2">

<li>Unlimited Registers</li>

<li>Custom Integrations</li>

<li>Dedicated Manager</li>

</ul>

<a href="#contact" class="block w-full bg-blue-100 text-blue-600 py-2 rounded-lg font-bold">Contact Us</a>

</div>

</div>

</div>

</section>


<section id="contact" class="py-20">

<div class="max-w-xl mx-auto px-4">

<h2 class="text-3xl font-bold text-center mb-8">Get In Touch</h2>



<?php if(isset($_SESSION['error'])): ?>

<div class="bg-red-100 text-red-700 p-4 rounded mb-6 text-center">

<?php echo $_SESSION['error']; unset($_SESSION['error']); ?>

</div>

<?php endif; ?>


<form action="process.php" method="POST" class="bg-white p-8 rounded-xl shadow-md">

<div class="mb-4">

<label class="block text-gray-700 font-bold mb-2">Name</label>

<input type="text" name="name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" required>

</div>

<div class="mb-4">

<label class="block text-gray-700 font-bold mb-2">Email</label>

<input type="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" required>

</div>

<div class="mb-6">

<label class="block text-gray-700 font-bold mb-2">Message</label>

<textarea name="message" rows="4" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" required></textarea>

</div>

<button type="submit" class="w-full bg-blue-600 text-white font-bold py-3 rounded-lg hover:bg-blue-700">Send Message</button>

</form>

</div>

</section>


<footer class="bg-gray-900 text-white py-8 text-center">

<div class="space-x-4 mb-4">

<a href="#" class="hover:text-blue-400">Twitter</a>

<a href="#" class="hover:text-blue-400">LinkedIn</a>

<a href="#" class="hover:text-blue-400">Facebook</a>

</div>

<p class="text-gray-400">&copy; <?php echo date("Y"); ?> QuickPOS. All rights reserved.</p>

</footer>


</body>

</html>


