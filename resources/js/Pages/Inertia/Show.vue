<script setup>
    defineProps({
        // key: type
        id: String
    })
</script>

<template>
    <!-- 実際に表示される方 スタッシュ{{ }}の中にkeyを記述 }}-->
    {{ id }}
</template>
