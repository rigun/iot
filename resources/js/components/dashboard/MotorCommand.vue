<template>
<div id="command" class="command">
<nav>
    <ul class="nav">
      <li><a @click.prevent="command2(2)"><i class="icon-search" style="color:#E0353D"></i></a></li>
      <li><a @click.prevent="command2(1)"><i class="icon-off" style="color:#E0353D"></i></a></li>      
    </ul>
    <ul class="nav">
      <li><a href="#"><i class="icon-phone" style="color:#50A11E"></i></a></li>
      <li><a href="#"><i class="icon-wrench" style="color:#17619D"></i></a></li>
    </ul>
    <ul class="nav">
      <li><a href="#"><i class="icon-copy" style="color:#174A57"></i></a></li>
      <li><a href="#"><i class="icon-cogs" style="color:#F8B50E"></i></a></li>
    </ul>
  </nav>
</div>
</template>
<script>
export default {
        methods: {
      
        command2(x)
            {
                 let uri = '/api/command/'+localStorage.getItem('token');
                axios.patch(uri, {commad: x}).then((response) => {
                    this.command = response.data;
                }).catch(error => {
                    console.log(error.response)
                });
            }   
        },
}
</script>