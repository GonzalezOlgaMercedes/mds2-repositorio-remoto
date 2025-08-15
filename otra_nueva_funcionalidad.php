<?php
echo "Esta es otra nueva funcionalidad";
echo "Bueno, resulta ser que para vincular una feature con un issue, primero había que crear el issue ¬¬";

/*Vamos a ello:
1- creamos una nueva rama para trabajar en la feature:
    git checkout -b feature/otra-nueva-funcionalidad develop
2- ahora que hemos creado nuevos cambios hay que stagearlos
    git add .
3- confirmamos los cambios siguiendo el estándar
    git commit -m "feat(ui): ahora sí ponele un botón de registro ¬¬"
4- ahora subimos la rama al remoto
    git push -u origin feature/otra-nueva-funcionalidad
*/