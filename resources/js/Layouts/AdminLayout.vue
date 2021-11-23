<template>
    <div id="body" class="theme-cyan">
        <!-- Theme Setting -->
        <Setting />
        <!-- Overlay For Sidebars -->
        <div class="overlay"></div>

        <div id="wrapper">
        <!-- Page top navbar -->
        <Header />
        <!-- Main left sidebar menu -->
        <Sidebar />
        <!-- Right bar chat  -->
        <Chat />
        <!-- Stiky note div  -->
        <Note />
        <!-- Main body part  -->
        <div id="main-content">
            <slot/>
        </div>
        </div>
    </div>
</template>

<script>

import Chat from "@/Components/Chat";
import Note from "@/Components/Note";
import Setting from "@/Components/Setting";
import Header from "@/Components/Admin/Navbar";
import Sidebar from "@/Components/Admin/Sidebar";

export default{
  components: { Header, Sidebar, Chat, Note, Setting },
}
</script>

<style></style>
