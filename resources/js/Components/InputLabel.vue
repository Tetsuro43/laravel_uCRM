<script setup>
defineProps(['value']);
</script>

<template>
    <label class="block font-medium text-sm text-gray-700">
        <!-- 埋め込んだファイルに、<Label value="件名">と、valueに値が設定されていると、その設定値が優先 -->
        <span v-if="value">{{ value }}</span>
        <!-- <slot />のところにカスタマイズしたファイルを埋め込むイメージ -->
        <span v-else><slot /></span>
    </label>
</template>
