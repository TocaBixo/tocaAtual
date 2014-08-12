function confirma() {
    var x;
    if (confirm("Tem certeza que deseja excluir este usuário?") == true) {
        x = "Certo então";
        location.href="../admin/excluir.php?codigo='.$usuarios['COD_LOGIN'].'"
    } else {
        x = "Aí tu desistiu, franguin";
    }
    document.getElementById("confirmar").innerHTML = x;
}