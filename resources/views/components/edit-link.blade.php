@props(['nota'])


<div>
    
<!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
    <a href=" {{route('notes.show',$nota->id)}}">

    <span class="hidden"> editar nota</span>
   <!-- agregar svg-->
    </a>
</div>