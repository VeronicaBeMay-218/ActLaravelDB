@props(['reminder'])


<div>
    
<!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
    <a href=" {{route('reminders.create',$reminder->id)}}">

    <span class="hidden"> crear reminder</span>
   <!-- agregar svg-->
   <h1>CREAR NUEVO RECORDATORIO</h1>

    </a>
</div>+