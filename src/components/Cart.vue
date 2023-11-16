<template>
    <div class="container" :style="{backgroundColor: bgColor}">
        <div class="image">
            <img :src=Img alt="">
        </div>
        <div class="title">
            {{ Title }}
        </div>
        <div class="item">
            {{ Item }}
        </div>
    </div>
</template>

<script>

export default {
    name: 'Cart',
    props: {
        bgColor: {
            type: String,
            default: '#3BB77E',
        },
        Img: {
            type: String,
            default: 'https://picsum.photos/200/300',
        },
        Title: {
            type: String,
            default: 'Title',
        },
        Item: {
            type: String,
            default: 'Item',
        },
    },
}

</script>

<style scoped>

.container {
    width: 136px;
    height: 185px;
    border: 1px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    border-radius: 10px;
}

.image {
    width: 120px;
    height: 120px;
    border-radius: 10px;
    margin-bottom: 10px;
}

.title {
    font-family: Quicksand;
    font-weight: 700;
    font-size: 16px;
    line-height: 20px;
    align-items: center;
    text-align: center;
    color: #000000;
}

.item {
    font-family: Quicksand;
    font-weight: 400;
    font-size: 12px;
    line-height: 15px;
    align-items: center;
    text-align: center;
    color: #00000087;
}

</style>