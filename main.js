const { createApp } = Vue

createApp({
    data() {
        return {

            item: {
                text: "",
                done: false
            },


            todoList: [],
        }
    },
    methods: {
        readList() {
            axios.get('server.php')
                .then(response => {
                    this.todoList = response.data;
                })
        },

        addTodo() {

            this.todoList.push({ ...this.item });
            this.item.text = "";  //this.text = "";

            axios.post('server.php', data,
                {
                    headers: { 'Content-Type': 'multipart/form-data' }
                }
            ).then(response => {
                this.todoList = response.data;
            });
        }

    },
    mounted() {
        this.readList();

        console.log(this.todoList);

    }
}).mount('#app')
