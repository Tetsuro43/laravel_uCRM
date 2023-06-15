<script setup>
// import { router } from '@inertiajs/vue3'
import { Inertia } from '@inertiajs/inertia';
/**
 * definePropsを、blog: Array  とすると以下のエラーが発出される
 * [Vue warn]: Invalid prop: type check failed for prop "blog".
 * Expected Array, got Object
 * つまりObject型を期待している
 * 一件だけ取得する際は、Array ではなく Object を指定する
 */
defineProps({
    // key: type
    id: String,
    blog: Object
})

const deleteConfirm = (id) => {
    // 以下のidの指定方法だと、引数で渡すidの値がURIに渡せない
    // Inertia.delete('/inertia/{id}', {
    //     onBefore: () => confirm(`${id}番目の記事を本当に削除しますか？`)
    // })

    Inertia.delete(`/inertia/${id}`, {
        onBefore: () => confirm(`${id}番目の記事を本当に削除しますか？`)
    })
}
</script>

<template>
    <!-- 実際に表示される方 マスタッシュ構文{{ }}の中にkeyを記述 }}-->
    Show.vue<br>
    {{ id }}<br>
    {{ blog.title }}<br>
    <button @click="deleteConfirm(blog.id)">削除</button>
</template>
