const app = Vue.createApp({
        data(){
           return {
            contacts : [],
            contact : {id : '',name : '',tel : ''},
           }
        },
        created() {
         this.getContacts();
     },
     methods: {
         getContacts(){
             axios.get('http://localhost/crud_app_php_vue/getContacts.php')
                 .then(response => this.contacts = response.data)
                 .catch(err => console.log(err));
         }
      }
   })
     
app.mount('#app')