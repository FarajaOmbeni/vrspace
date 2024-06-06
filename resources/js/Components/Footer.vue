<template>
  <footer class="footer border-t-2 border-t-blue">
    <div class="container px-6 sm:px-0 mx-auto text-center py-8">
      <h1 class="text-3xl text-blue font-header font-bold">EXPERIENCE VR NOW</h1>
      <p class="max-w-lg mx-auto mt-4 leading-7 font-semibold">
        Ready to make your event unforgettable? Partner with VR SPACE for any VR-related occasion,
        be it birthdays, teambuilding events, or educational sessions. Our cutting-edge VR experiences guarantee fun,
        engagement, and memories that’ll last a lifetime. Let’s create something epic together!
      </p>
      <button class="text-white rounded-full bg-purple mt-5 py-3 px-10 text-xs font-bold hover:opacity-95">
        <Link href="/experiences">EXPERIENCE VR
        NOW</Link>
      </button>
    </div>

    <div class="mt-10 bg-blue">
      <div class="flex md:gap-40 gap-2 flex-col text-center md:flex-row items-center justify-center">
        <div class="mt-3">
          <p class="text-pink text-lg">Quick Links</p>
          <ul class="text-white py-3">
            <li>
              <QuickLink href="/">Home</QuickLink>
            </li>
            <li>
              <QuickLink href="/experiences">View Experiences</QuickLink>
            </li>
            <li>
              <QuickLink href="/about">About Us</QuickLink>
            </li>
            <li>
              <QuickLink href="/contact">Contact Us</QuickLink>
            </li>
          </ul>

        </div>
        <div class=" mt-3">
          <p class="text-pink text-lg">Social Media</p>
          <ul class="text-white py-3">
            <li>
              <a class="hover:text-pink" target="_blank" href="https://facebook.com">Meta</a>
            </li>
            <li>
              <a class="hover:text-pink" target="_blank" href="https://instagram.com">Instagram</a>
            </li>
            <li>
              <a class="hover:text-pink" target="_blank" href="https://tiktok.com">Tiktok</a>
            </li>
            <li>
              <a class="hover:text-pink" target="_blank" href="https://linkedIn.com">LinkedIn</a>
            </li>
          </ul>
        </div>
        <div class=" mt-3">
          <p class="text-pink text-lg">Experiences</p>
          <ul class="text-white py-3">
            <li>
              <QuickLink href="/on_demand">On-Demand</QuickLink>
            </li>
            <li>
              <QuickLink href="/education">Education</QuickLink>
            </li>
            <li>
              <QuickLink href="/birthday">Birthday Parties</QuickLink>
            </li>
            <li>
              <QuickLink href="/events">Events</QuickLink>
            </li>
          </ul>
        </div>
      </div>
      <p class="text-center text-lg text-xs mt-5 py-2 text-white">Copyright © 2024 VR SPACE. All rights reserved.</p>
    </div>
  </footer>
</template>

<script setup>
import QuickLink from '@/Shared/QuickLink.vue';

</script>