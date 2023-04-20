const { createApp } = Vue

createApp({
    data() {
        return {
            todoList: [],
            newItem: ''
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

            const data = {
                newItem: this.newItem
            };

            axios.post('server.php', data,
                {
                    headers: { 'Content-Type': 'multipart/form-data' }
                }
            ).then(response => {
                this.todoList = response.data;
                this.newItem ='';
            });
        }


 
    },
    mounted() {
        this.readList();


    }
}).mount('#app')
