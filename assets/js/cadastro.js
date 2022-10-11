$(document).ready(function() {
    var $progress         = $('#progress'), // Barra de Progresso.
      $progressElements = $('.campos'), // Elementos que devem ser checados
                                          // para modificar o valor da barra.
      TOTAL             = $progressElements.length; // Total de elementos.

  
  $progressElements.on('blur, change', function() {
    
    // Faz um filtro com o total elementos válidos.
    // Nesse caso, campos que não estejam "em branco" e que não estejam marcados
    // como ':invalid'.
    var valid = $progressElements.filter(function() {
      return ($(this).val() || $(this).prop('checked')) && !$(this).is(':invalid');
    }).length;
    
    // Calcula a porcentagem e altera o valor da barra.
    var percent = (valid * 100) / TOTAL,
        current = $progress.val();
    
    var increase = percent > current;
        
    var transition = setInterval(function(){
      if((increase && current >= percent) ||
        (!increase && current <= percent))
          clearInterval(transition);
      
      var value = $progress.val();
      value = increase ? value+1 : value-1;
      current = value;
      
      $progress.val(current);
    }, 10);    
  });
});