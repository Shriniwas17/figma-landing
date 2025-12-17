<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ShipX</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#081A2F] text-white">

<!-- HERO SECTION -->
<section
    class="relative h-screen bg-cover bg-center"
    style="background-image: url('{{ asset('images/hero-bg.png') }}');"
>
    <!-- Dark overlay -->
    <div class="absolute inset-0 bg-[#081A2F]/80"></div>

    <!-- NAVBAR -->
    <nav class="relative z-20 max-w-7xl mx-auto px-8 py-6 flex items-center justify-between">
        <div class="flex items-center gap-2 text-xl font-semibold">
            <span >
                <img src="{{ asset('images/logo.png') }}" alt="ShipX Logo" class="h-8 w-8">
            </span>
            ShipX
        </div>

        <ul class="hidden md:flex gap-8 text-sm text-gray-200">
            <li class="hover:text-white">Home</li>
            <li class="hover:text-white">About</li>
            <li class="hover:text-white">Solutions</li>
            <li class="hover:text-white">Blog</li>
        </ul>

        <button class="bg-[#6C63FF] px-5 py-2 rounded-full text-sm font-medium">
            Get Started ↗
        </button>
    </nav>

    <!-- HERO CONTENT -->
    <div class="relative z-20 max-w-5xl mx-auto px-8 pt-28 text-center">

        <h1 class="text-4xl md:text-6xl font-extrabold leading-tight">
            STAY AHEAD <br />
            IN SHIPPING AND LOGISTICS
        </h1>

        <p class="mt-6 text-gray-300 max-w-2xl mx-auto text-sm md:text-base">
            Discover key insights and trends to enhance your shipping
            strategies and stay competitive
        </p>

        <!-- Buttons -->
        <div class="mt-8 flex justify-center gap-4">
            <a href="#contact"
               class="bg-[#6C63FF] px-6 py-3 rounded-full text-sm font-semibold flex items-center gap-2">
                Contact us →
            </a>

            <a href="#"
               class="bg-white/10 backdrop-blur px-6 py-3 rounded-full text-sm flex items-center gap-2">
                ▶ Play video
            </a>
        </div>
    </div>

    <!-- FLOATING BRAND TAGS -->
    <div class="absolute inset-0 z-10">

        <!-- Left -->
        <div class="absolute left-10 top-1/2 bg-white/10 backdrop-blur px-4 py-2 rounded-full text-xs flex items-center gap-2">
            <span class="w-2 h-2 bg-red-500 rounded-full"></span> Hero
        </div>

        <div class="absolute left-24 bottom-28 bg-white/10 backdrop-blur px-4 py-2 rounded-full text-xs">
            Tata
        </div>

        <div class="absolute left-40 bottom-20 bg-white/10 backdrop-blur px-4 py-2 rounded-full text-xs">
            Logo
        </div>

        <!-- Right -->
        <div class="absolute right-32 top-1/2 bg-white/10 backdrop-blur px-4 py-2 rounded-full text-xs">
            Myntra
        </div>

        <div class="absolute right-20 top-1/3 bg-white/10 backdrop-blur px-4 py-2 rounded-full text-xs">
            H&M
        </div>

        <div class="absolute right-28 bottom-28 bg-white/10 backdrop-blur px-4 py-2 rounded-full text-xs">
            Adidas
        </div>
    </div>
</section>

<!-- TESTIMONIAL SECTION -->
<section class="bg-[#0B1230] py-24 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-8 grid md:grid-cols-2 gap-16 items-center">

        <!-- LEFT CONTENT -->
        <div>
            <span class="inline-block text-xs px-4 py-1 rounded-full bg-white/10 mb-6">
                Testimonial
            </span>

            <h2 class="text-4xl font-bold leading-tight mb-6">
                What Do Our <br /> Clients Say
            </h2>

            <p class="text-gray-400 max-w-md mb-8 text-sm">
                We make shipping simple with fast booking, real-time tracking,
                and secure, on-time delivery for every cargo across the globe.
            </p>

            <div class="flex gap-4">
                <a href="#contact"
                   class="bg-[#6C63FF] px-6 py-3 rounded-full text-sm font-medium">
                    Contact us →
                </a>

                <a href="#"
                   class="bg-white/10 px-6 py-3 rounded-full text-sm font-medium">
                    Get Started →
                </a>
            </div>
        </div>

        <!-- RIGHT TESTIMONIAL CARDS -->
        <div class="relative">

            <!-- MAIN CARD -->
            <div class="bg-white/10 backdrop-blur-lg rounded-2xl p-6 max-w-md ml-auto shadow-xl">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 rounded-full bg-gray-400"></div>
                    <div>
                        <h4 class="text-sm font-semibold">Olivia Jonathan</h4>
                        <p class="text-xs text-gray-400">CEO at Shipzo</p>
                    </div>
                </div>

                <!-- Stars -->
                <div class="flex gap-1 mb-4 text-[#6C63FF]">
                    ★ ★ ★ ★ ☆
                </div>

                <p class="text-sm text-gray-300 mb-6 leading-relaxed">
                    “Ship X has completely changed the way we manage logistics.
                    The platform is easy to use, and their tracking system keeps
                    us updated at every step.”
                </p>

                <div class="flex justify-between items-center text-xs text-gray-400">
                    <span class="flex items-center gap-1">
                        ✔ Verified
                    </span>

                    <span>
                        Mumbai → Delhi
                    </span>
                </div>
            </div>

            <!-- SIDE CARD (PARTIAL) -->
            <div class="hidden md:block absolute right-[-120px] top-8 bg-white/5 backdrop-blur rounded-2xl p-5 w-64 opacity-60">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-8 h-8 rounded-full bg-gray-400"></div>
                    <div>
                        <h4 class="text-xs font-semibold">Marie Jane</h4>
                        <p class="text-[10px] text-gray-400">CFO at Movix</p>
                    </div>
                </div>

                <p class="text-xs text-gray-300">
                    Reliable and fast shipping solutions.
                </p>

                <span class="block mt-4 text-[10px] text-gray-400">
                    ✔ Verified
                </span>
            </div>

            <!-- SLIDER INDICATOR -->
            <div class="mt-8 flex justify-center">
                <span class="w-10 h-1 bg-white rounded-full"></span>
            </div>
        </div>
    </div>
</section>

<!-- UNLOCK POWER SECTION -->
<section class="bg-white py-24">
    <div class="max-w-7xl mx-auto px-8 grid md:grid-cols-2 gap-16 items-center">

        <!-- LEFT CONTENT -->
        <div>
            <span class="inline-block text-xs px-4 py-1 rounded-full border mb-6 text-[#0B1230]">
                Tracking
            </span>

            <h2 class="text-4xl font-bold leading-tight mb-6 text-[#0B1230]">
                Unlock The Full <br>
                Power of ShipX <br>
                Logistics
            </h2>

            <p class="text-gray-500 max-w-md mb-8 text-sm leading-relaxed">
                Track shipments, monitor vehicles, and analyze data—all from one smart
                dashboard. Ship X simplifies your logistics with full control and visibility.
            </p>

            <div class="flex gap-4">
                <a href="#contact"
                   class="bg-[#6C63FF] text-white px-6 py-3 rounded-full text-sm font-medium">
                    Contact us →
                </a>

                <a href="#"
                   class="border px-6 py-3 rounded-full text-sm font-medium text-[#0B1230]">
                    Get Started →
                </a>
            </div>
        </div>

        <!-- RIGHT IMAGE CARD -->
        <div class="relative flex justify-center">

            <!-- IMAGE -->
            <div class="relative rounded-2xl overflow-hidden shadow-xl max-w-md">
                <img src="{{ asset('images/tracking-user.png') }}"
                     alt="Tracking Dashboard"
                     class="w-full h-full object-cover">

                <!-- INNER BORDER -->
                <div class="absolute inset-4 border border-white/40 rounded-xl pointer-events-none"></div>

                <!-- STATS CARD -->
                <div class="absolute bottom-4 left-4 right-4 bg-white/80 backdrop-blur-md rounded-xl p-4 flex justify-between items-center">
                    <div>
                        <p class="text-xs text-gray-500 mb-1">
                            ● Improved Supply Chain
                        </p>
                        <h3 class="text-2xl font-bold text-[#0B1230]">
                            25K
                        </h3>
                    </div>

                    <span class="text-xs bg-green-100 text-green-600 px-2 py-1 rounded-full">
                        +50%
                    </span>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- CONTACT / MAP SECTION -->
<section class="bg-[#0B1230] py-24">
    <div class="max-w-7xl mx-auto px-8 grid md:grid-cols-2 gap-16 items-center">

        <!-- MAP -->
        <div class="rounded-xl overflow-hidden shadow-lg h-[360px]">
            <iframe
                src="https://www.google.com/maps?q=India&output=embed"
                class="w-full h-full border-0"
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>

        <!-- CONTACT FORM -->
        <div>
            <h3 class="text-xl font-semibold mb-6">
                Send Us A Message
            </h3>

            <!-- SUCCESS / ERROR -->
            @if(session('success'))
                <div class="mb-4 text-sm text-green-400">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="mb-4 text-sm text-red-400">
                    Please fix the errors below.
                </div>
            @endif

            <form method="POST" action="{{ route('lead.store') }}" class="space-y-4">
                @csrf

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <input type="text" name="name" placeholder="Full Name"
                           class="w-full bg-white/10 border border-white/20 rounded-lg px-4 py-3 text-sm focus:outline-none"
                           value="{{ old('name') }}">

                    <input type="text" name="business_name" placeholder="Business Name"
                           class="w-full bg-white/10 border border-white/20 rounded-lg px-4 py-3 text-sm focus:outline-none"
                           value="{{ old('business_name') }}">
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <input type="email" name="email" placeholder="Email Id"
                           class="w-full bg-white/10 border border-white/20 rounded-lg px-4 py-3 text-sm focus:outline-none"
                           value="{{ old('email') }}">

                    <input type="text" name="phone" placeholder="Phone Number"
                           class="w-full bg-white/10 border border-white/20 rounded-lg px-4 py-3 text-sm focus:outline-none"
                           value="{{ old('phone') }}">
                </div>

                <div>
                    <input type="file" name="attachment"
                           class="w-full bg-white/10 border border-white/20 rounded-lg px-4 py-3 text-sm">
                </div>

                <div>
                    <textarea name="message" rows="4" placeholder="Your Message"
                              class="w-full bg-white/10 border border-white/20 rounded-lg px-4 py-3 text-sm focus:outline-none">{{ old('message') }}</textarea>
                </div>

                <button type="submit"
                        class="bg-[#7AC943] text-[#0B1230] px-8 py-3 rounded-lg text-sm font-semibold">
                    Submit
                </button>
            </form>
        </div>

    </div>
</section>


<!-- FOOTER -->
<footer class="bg-gray-50 py-12">
  <div class="container mx-auto px-6">

    <!-- Logo + Socials Row -->
    <div class="flex items-center justify-start mb-4">
      <div class="flex items-center space-x-2">
        <img src="{{ asset('images/logo.png') }}" alt="ShipX Logo" class="h-8 w-8">
        <span class="font-bold text-xl text-gray-900">ShipX</span>
      </div>
     
                <a href="#"><img src="{{ asset('images/twitter-icon.png') }}" class="h-6 w-6"></a>
                <a href="#"><img src="{{ asset('images/instagram-icon.png') }}" class="h-6 w-6"></a>
                <a href="#"><img src="{{ asset('images/linkedin-icon.png') }}" class="h-6 w-6"></a>
    </div>
     <div>©2025 ShipX. All Rights Reserved.</div>
    <!-- Divider -->
    <hr class="border-gray-300 mb-6">

    <!-- Newsletter + Links -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
      
      <!-- Column 1: Newsletter -->
      <div>
        <h4 class="font-semibold text-gray-800 mb-2">Subscribe to Chainex</h4>
        <form class="flex mt-2">
          <input type="email" placeholder="Enter your Email" class="w-full px-3 py-2 border rounded-l-md focus:outline-none focus:ring-2 focus:ring-blue-400">
          <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-r-md hover:bg-blue-600">Sign up</button>
        </form>
      </div>

      <!-- Column 2: Explore -->
      <div>
        <h4 class="font-semibold text-gray-800 mb-2">Explore</h4>
        <ul class="space-y-1 text-gray-600">
          <li><a href="#" class="hover:text-gray-900">Home</a></li>
          <li><a href="#" class="hover:text-gray-900">About Us</a></li>
          <li><a href="#" class="hover:text-gray-900">Solutions</a></li>
          <li><a href="#" class="hover:text-gray-900">Blog</a></li>
        </ul>
      </div>

      <!-- Column 3: Solutions -->
      <div>
        <h4 class="font-semibold text-gray-800 mb-2">Solutions</h4>
        <ul class="space-y-1 text-gray-600">
          <li><a href="#" class="hover:text-gray-900">Freight Management</a></li>
          <li><a href="#" class="hover:text-gray-900">Order Tracking</a></li>
          <li><a href="#" class="hover:text-gray-900">Carrier Integration</a></li>
          <li><a href="#" class="hover:text-gray-900">Analytics Dashboard</a></li>
        </ul>
      </div>

      <!-- Column 4: Resources -->
      <div>
        <h4 class="font-semibold text-gray-800 mb-2">Resources</h4>
        <ul class="space-y-1 text-gray-600">
          <li><a href="#" class="hover:text-gray-900">Help Center</a></li>
          <li><a href="#" class="hover:text-gray-900">FAQs</a></li>
          <li><a href="#" class="hover:text-gray-900">Terms of Service</a></li>
          <li><a href="#" class="hover:text-gray-900">Privacy Policy</a></li>
        </ul>
      </div>
    </div>

    <!-- Footer Note -->
    <div class="text-center text-gray-400 mt-8 text-sm">
      ©2025 ShipX. All Rights Reserved.
    </div>
  </div>
</footer>


</body>
</html>
