 function OnSelectionChange (select) {
            var selectedOption = select.options[select.selectedIndex];
            location.href="ParametrizacionFuncionario.php?cargo="+selectedOption.value;
        
        }