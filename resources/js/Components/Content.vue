<script setup>
import { Head, Link } from '@inertiajs/vue3';

</script>

<template>
    <div class="text-white mt-48 max-w-xl">
        <h1 class=" text-6xl  font-semibold  leading-normal">Pharma.co<br> Aquele em quem você confia <span
                class="font-light"></span></h1>
        <p>Sua saúde merece nossos cuidados.</p>
    </div>

    <div class="mt-10">
        <Link :href="route('login')"
            class="bg-blue-700 rounded-3xl hover:bg-transparent hover:border-blue-700 hover:text-white duration-300 hover:border border border-transparent text-white py-3 px-8 font-medium inline-block mr-4">
        Saiba mais</Link>
        <Link :href="route('register')" class=" text-white">Baixar na GooglePlay<span
            class="text-lg inline-block rotate-90">&#10148;</span> </Link>
    </div>
<!-- <img src="../../../public/assets/capsule.png" alt="" class="w-full xl:w-1/3 xl:absolute bottom-40 right-80 animate-"> -->
</template>
