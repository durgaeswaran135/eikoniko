

const eye=document.querySelector('#eye');
const pass=document.querySelector('#pass');

eye.addEventListener('click',function()
{
  if(pass.type=='text'){
    pass.type='password';
    eye.innerHTML='<i class="fa fa-eye"></i>';
  }
  else{
    pass.type='text';
    eye.innerHTML='<i class="fa fa-eye-slash"></i>';
  }
});

