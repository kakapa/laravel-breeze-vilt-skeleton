<template>
    <Head title="Homepage" />

    <GuestLayout>
    <div>
      <!-- Hero Section -->
      <div class="relative bg-gray-900">
        <div class="absolute inset-0">
          <img class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" alt="Community meeting" />
          <div class="absolute inset-0 bg-black opacity-60"></div>
        </div>
        <div class="relative max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
          <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">South African National Civic Organisation</h1>
          <p class="mt-6 text-xl text-gray-300 max-w-3xl">Empowering communities through civic engagement, advocacy, and grassroots organization.</p>
          <div class="mt-10 flex flex-col sm:flex-row gap-4">
            <Link href="/about" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-orange-500 hover:bg-orange-600">
              Learn More
            </Link>
            <Link href="/contact" class="inline-flex items-center justify-center px-5 py-3 border border-white text-base font-medium rounded-md text-white hover:bg-gray-800">
              Get Involved
            </Link>
          </div>
        </div>
      </div>

      <!-- Mission Section -->
      <div class="bg-white py-16 sm:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="lg:text-center">
            <h2 class="text-base text-orange-500 font-semibold tracking-wide uppercase">Our Mission</h2>
            <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
              Building Stronger Communities Together
            </p>
            <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
              SANCO is dedicated to improving the quality of life in South African communities through civic engagement, advocacy, and grassroots organization.
            </p>
          </div>

          <div class="mt-16">
            <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
              <div class="bg-gray-50 p-6 rounded-lg">
                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-orange-500 text-white">
                  <HomeIcon class="h-6 w-6" />
                </div>
                <h3 class="mt-5 text-lg leading-6 font-medium text-gray-900">Housing & Infrastructure</h3>
                <p class="mt-2 text-base text-gray-500">
                  Advocating for quality housing, basic services, and infrastructure development in all communities.
                </p>
              </div>

              <div class="bg-gray-50 p-6 rounded-lg">
                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-green-600 text-white">
                  <BookOpenIcon class="h-6 w-6" />
                </div>
                <h3 class="mt-5 text-lg leading-6 font-medium text-gray-900">Education & Youth</h3>
                <p class="mt-2 text-base text-gray-500">
                  Supporting educational initiatives and creating opportunities for youth development and empowerment.
                </p>
              </div>

              <div class="bg-gray-50 p-6 rounded-lg">
                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-red-600 text-white">
                  <HeartHandshakeIcon class="h-6 w-6" />
                </div>
                <h3 class="mt-5 text-lg leading-6 font-medium text-gray-900">Community Safety</h3>
                <p class="mt-2 text-base text-gray-500">
                  Working with communities and authorities to create safer neighborhoods and reduce crime.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- News & Events Section -->
      <div class="bg-gray-100 py-16 sm:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="lg:text-center mb-12">
            <h2 class="text-base text-orange-500 font-semibold tracking-wide uppercase">Stay Informed</h2>
            <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
              Latest News & Upcoming Events
            </p>
          </div>

          <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
            <div v-for="(item, index) in newsItems" :key="index" class="bg-white overflow-hidden shadow rounded-lg">
              <div class="h-48 w-full bg-gray-200">
                <img :src="item.image" alt="News image" class="h-full w-full object-cover" />
              </div>
              <div class="p-6">
                <div class="flex items-center">
                  <CalendarIcon class="h-5 w-5 text-orange-500" />
                  <span class="ml-2 text-sm text-gray-500">{{ item.date }}</span>
                </div>
                <h3 class="mt-2 text-xl font-semibold text-gray-900">{{ item.title }}</h3>
                <p class="mt-3 text-base text-gray-500">{{ item.description }}</p>
                <div class="mt-4">
                  <a href="#" class="text-orange-500 hover:text-orange-600 font-medium">Read more →</a>
                </div>
              </div>
            </div>
          </div>

          <div class="mt-12 text-center">
            <Link href="/news" class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-orange-500 bg-white hover:bg-gray-50">
              View All News & Events
            </Link>
          </div>
        </div>
      </div>

      <!-- Testimonials Section -->
      <div class="bg-white py-16 sm:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="lg:text-center mb-12">
            <h2 class="text-base text-orange-500 font-semibold tracking-wide uppercase">Testimonials</h2>
            <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
              Voices from Our Community
            </p>
          </div>

          <div class="mt-12 grid gap-8 lg:grid-cols-3">
            <div v-for="(testimonial, index) in testimonials" :key="index" class="bg-gray-50 p-6 rounded-lg">
              <div class="flex items-center mb-4">
                <div class="h-12 w-12 rounded-full overflow-hidden bg-gray-300">
                  <img :src="testimonial.avatar" alt="Avatar" class="h-full w-full object-cover" />
                </div>
                <div class="ml-4">
                  <h4 class="text-lg font-medium text-gray-900">{{ testimonial.name }}</h4>
                  <p class="text-sm text-gray-500">{{ testimonial.role }}</p>
                </div>
              </div>
              <p class="text-gray-600 italic">{{ testimonial.quote }}</p>
            </div>
          </div>
        </div>
      </div>

      <!-- CTA Section -->
      <div class="bg-orange-500">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
          <h2 class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">
            <span class="block">Ready to make a difference?</span>
            <span class="block text-black">Join SANCO today.</span>
          </h2>
          <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
            <div class="inline-flex rounded-md shadow">
              <Link href="/register" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-orange-600 bg-white hover:bg-gray-100">
                Become a Member
              </Link>
            </div>
            <div class="ml-3 inline-flex rounded-md shadow">
              <Link href="/contact" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-black hover:bg-gray-900">
                Contact Us
              </Link>
            </div>
          </div>
        </div>
      </div>
    </div>
    </GuestLayout>
</template>

<script setup>
    import { ref } from 'vue';
    import { Link } from '@inertiajs/vue3';
    import { HomeIcon, BookOpenIcon, HeartHandshakeIcon, CalendarIcon } from 'lucide-vue-next';
    import GuestLayout from '@/Layouts/GuestLayout.vue';

    const newsItems = ref([
    {
        title: 'SANCO Launches New Housing Initiative',
        date: 'June 15, 2023',
        description: 'SANCO has partnered with local government to launch a new housing initiative aimed at improving living conditions in underserved communities.',
        image: 'https://images.unsplash.com/photo-1560518883-ce09059eeffa?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1073&q=80'
    },
    {
        title: 'Community Clean-up Day',
        date: 'July 2, 2023',
        description: 'Join us for our monthly community clean-up day. Together, we can make our neighborhoods cleaner and safer for everyone.',
        image: 'https://images.unsplash.com/photo-1618477462146-050d2767eac4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80'
    },
    {
        title: 'Youth Leadership Workshop',
        date: 'July 15, 2023',
        description: 'SANCO is hosting a youth leadership workshop to empower the next generation of community leaders. Register now to secure your spot.',
        image: 'https://images.unsplash.com/photo-1531545514256-b1400bc00f31?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80'
    }
    ]);

    const testimonials = ref([
    {
        name: 'Thabo Mbeki',
        role: 'Community Member',
        quote: 'SANCO has transformed our community. Through their advocacy, we now have better access to clean water and improved infrastructure.',
        avatar: 'https://randomuser.me/api/portraits/men/1.jpg'
    },
    {
        name: 'Nomzamo Mbatha',
        role: 'Youth Volunteer',
        quote: 'The youth programs organized by SANCO have given me skills and confidence I never thought I could have. I am now a proud community leader.',
        avatar: 'https://randomuser.me/api/portraits/women/2.jpg'
    },
    {
        name: 'Sipho Mabuse',
        role: 'Local Business Owner',
        quote: 'SANCO\'s initiatives to improve safety in our area have had a positive impact on my business and the entire community.',
        avatar: 'https://randomuser.me/api/portraits/men/3.jpg'
    }
    ]);
</script>
