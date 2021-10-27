<template>
    <div>
        과목명: <input type="text" v-model="name">
        학점: <input type="text" v-model="score">
        과목설명: <input type="text" v-model="exp">
        <button @click="apply">등록</button>
        <!-- 과목 등록 -->
    </div>
</template>

<script>
export default {
    data() {
        return({
            name: '',
            score: 0,
            exp: '',
        })
    },

    methods: {
        apply() {
            axios.post('/applysubject/newsubject', {name: this.name, score: this.score, exp: this.exp})
            .then(response=>{
            })
            .catch(error=>{
                console.log(error)
            })
        }
        
    }
}
</script>
