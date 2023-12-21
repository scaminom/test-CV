class suma{
    constructor(a,b){
        this.a = a;
        this.b = b;
    }
    sumar(){
        return this.a + this.b;
    }   
}

function sumarNumeros(){
    let var1 = parseInt(document.getElementById("txtPrimerNum").value);
    let var2 = parseInt(document.getElementById("txtSegundoNum").value);
    let resultado = new suma(var1,var2);
    document.getElementById("suma").innerText = resultado.sumar();
}