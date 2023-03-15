<script setup>
import Content from '@/Components/Content.vue';
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
});
</script>

<template>
    <Head title="Bem vindo" />

    <main v-if="canLogin" class="">
        <Link v-if="$page.props.auth.user" :href="route('dashboard')" >Dashboard</Link>

        <template v-else>

            <section class=" min-h-screen  bg-[url('https://images.unsplash.com/photo-1588718889344-f7bd7a565d20?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80')] bg-center bg-cover px-28 py-5 relative">
                <nav class="flex items-center">
                    <img src="../../../public/assets/Pharmaco_logo.png" class="w-80 cursor-pointer" alt="">
                    <ul class="flex-1 text-center">
                        <li class="list-none inline-block px-5" ><Link class="no-underline text-white px-2  hover:text-red-600 duration-300" :href="route('login')">Entrar</Link></li>
                        <li class="list-none inline-block px-5"><Link class="no-underline text-white px-2  hover:text-red-600 duration-300" :href="route('register')">Cadastrar</Link></li>
                    </ul>
                </nav>

                <Content />

            </section>


        </template>
    </main>


</template>

<style scoped>
.c-item{
    height: 600px;
}

.c-img{
    height: 100%;
    object-fit: cover;
    filter: brightness(0.7);
}

</style>
