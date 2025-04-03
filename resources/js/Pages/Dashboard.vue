<script setup>
import { ref } from 'vue';
import { BellIcon, MenuIcon, XIcon, MapPinIcon, CalendarIcon, UsersIcon, ClipboardCheckIcon, BookOpenIcon, FileTextIcon, ShieldIcon } from 'lucide-vue-next';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

const stats = ref([
  {
    name: 'Community Events',
    value: '12',
    icon: CalendarIcon
  },
  {
    name: 'Active Projects',
    value: '8',
    icon: ClipboardCheckIcon
  },
  {
    name: 'Community Members',
    value: '2,543',
    icon: UsersIcon
  }
]);

const events = ref([
  {
    title: 'Community Clean-up Day',
    type: 'Environment',
    location: 'Soweto, Johannesburg',
    date: 'July 15, 2023'
  },
  {
    title: 'Youth Leadership Workshop',
    type: 'Education',
    location: 'SANCO Community Center, Cape Town',
    date: 'July 22, 2023'
  },
  {
    title: 'Housing Rights Seminar',
    type: 'Advocacy',
    location: 'Durban City Hall',
    date: 'August 5, 2023'
  },
  {
    title: 'Health and Wellness Fair',
    type: 'Health',
    location: 'Pretoria Community Park',
    date: 'August 12, 2023'
  }
]);

const activities = ref([
  {
    user: 'Thabo Mbeki',
    action: 'Commented on the Housing Rights Seminar',
    time: '2 hours ago',
    userImage: 'https://randomuser.me/api/portraits/men/1.jpg'
  },
  {
    user: 'Nomzamo Mbatha',
    action: 'Registered for the Youth Leadership Workshop',
    time: '5 hours ago',
    userImage: 'https://randomuser.me/api/portraits/women/2.jpg'
  },
  {
    user: 'Sipho Mabuse',
    action: 'Created a new community project: "Small Business Support Network"',
    time: '1 day ago',
    userImage: 'https://randomuser.me/api/portraits/men/3.jpg'
  },
  {
    user: 'Lerato Kganyago',
    action: 'Uploaded photos from the last community meeting',
    time: '2 days ago',
    userImage: 'https://randomuser.me/api/portraits/women/4.jpg'
  }
]);

const resources = ref([
  {
    title: 'Community Organizing Guide',
    description: 'Learn effective strategies for organizing your community around important issues.',
    icon: BookOpenIcon
  },
  {
    title: 'Housing Rights Handbook',
    description: 'A comprehensive guide to housing rights and tenant protections in South Africa.',
    icon: FileTextIcon
  },
  {
    title: 'Safety and Security Toolkit',
    description: 'Resources for improving safety and security in your neighborhood.',
    icon: ShieldIcon
  }
]);
</script>

<template>
    <AuthenticatedLayout>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Welcome Section -->
            <div class="px-4 py-6 sm:px-0">
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                <h2 class="text-lg leading-6 font-medium text-gray-900">Welcome back, {{ $page.props.auth.user.name }}</h2>
                <p class="mt-1 text-sm text-gray-500">
                    Here's what's happening in your SANCO community.
                </p>
                </div>
            </div>
            </div>

            <!-- Stats Section -->
            <div class="px-4 py-6 sm:px-0">
            <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
                <div v-for="(stat, index) in stats" :key="index" class="bg-white overflow-hidden shadow rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                    <div class="flex items-center">
                    <div class="flex-shrink-0 bg-orange-500 rounded-md p-3">
                        <component :is="stat.icon" class="h-6 w-6 text-white" />
                    </div>
                    <div class="ml-5 w-0 flex-1">
                        <dl>
                        <dt class="text-sm font-medium text-gray-500 truncate">{{ stat.name }}</dt>
                        <dd>
                            <div class="text-lg font-medium text-gray-900">{{ stat.value }}</div>
                        </dd>
                        </dl>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>

            <!-- Upcoming Events Section -->
            <div class="px-4 py-6 sm:px-0">
            <h2 class="text-lg leading-6 font-medium text-gray-900 mb-4">Upcoming Events</h2>
            <div class="bg-white shadow overflow-hidden sm:rounded-md">
                <ul class="divide-y divide-gray-200">
                <li v-for="(event, index) in events" :key="index">
                    <a href="#" class="block hover:bg-gray-50">
                    <div class="px-4 py-4 sm:px-6">
                        <div class="flex items-center justify-between">
                        <p class="text-sm font-medium text-orange-600 truncate">{{ event.title }}</p>
                        <div class="ml-2 flex-shrink-0 flex">
                            <p class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                            {{ event.type }}
                            </p>
                        </div>
                        </div>
                        <div class="mt-2 sm:flex sm:justify-between">
                        <div class="sm:flex">
                            <p class="flex items-center text-sm text-gray-500">
                            <MapPinIcon class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" />
                            {{ event.location }}
                            </p>
                        </div>
                        <div class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0">
                            <CalendarIcon class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" />
                            <p>
                            {{ event.date }}
                            </p>
                        </div>
                        </div>
                    </div>
                    </a>
                </li>
                </ul>
            </div>
            </div>

            <!-- Recent Activity Section -->
            <div class="px-4 py-6 sm:px-0">
            <h2 class="text-lg leading-6 font-medium text-gray-900 mb-4">Recent Activity</h2>
            <div class="bg-white shadow overflow-hidden sm:rounded-md">
                <ul class="divide-y divide-gray-200">
                <li v-for="(activity, index) in activities" :key="index" class="px-4 py-4 sm:px-6">
                    <div class="flex items-center">
                    <div class="min-w-0 flex-1 flex items-center">
                        <div class="flex-shrink-0">
                        <img class="h-12 w-12 rounded-full" :src="activity.userImage" alt="" />
                        </div>
                        <div class="min-w-0 flex-1 px-4">
                        <div>
                            <p class="text-sm font-medium text-orange-600 truncate">{{ activity.user }}</p>
                            <p class="mt-1 text-sm text-gray-500">{{ activity.action }}</p>
                        </div>
                        </div>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">{{ activity.time }}</p>
                    </div>
                    </div>
                </li>
                </ul>
            </div>
            </div>

            <!-- Resources Section -->
            <div class="px-4 py-6 sm:px-0">
            <h2 class="text-lg leading-6 font-medium text-gray-900 mb-4">Resources</h2>
            <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
                <div v-for="(resource, index) in resources" :key="index" class="bg-white overflow-hidden shadow rounded-lg">
                <div class="p-5">
                    <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <component :is="resource.icon" class="h-6 w-6 text-orange-500" />
                    </div>
                    <div class="ml-3">
                        <h3 class="text-lg font-medium text-gray-900">{{ resource.title }}</h3>
                    </div>
                    </div>
                    <div class="mt-4">
                    <p class="text-sm text-gray-500">{{ resource.description }}</p>
                    </div>
                    <div class="mt-6">
                    <a href="#" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-orange-500 hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500">
                        View
                    </a>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

