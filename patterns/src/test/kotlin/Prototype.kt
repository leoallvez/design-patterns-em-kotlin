import org.assertj.core.api.Assertions.assertThat
import org.junit.jupiter.api.Test

open class Bicicleta : Cloneable {
    private var engrenagens: Int = 0
    private var tipo: String? = null
    var modelo: String? = null
        private set

    init {
        tipo = "Padrão"
        modelo = "Leopard"
        engrenagens = 4
    }

    public override fun clone(): Bicicleta = Bicicleta()

    fun criaAvancada() {
        tipo = "Avançada"
        modelo = "Jaguar"
        engrenagens = 6
    }
}

fun criaJaguar(bicicletaBasica: Bicicleta): Bicicleta {
    bicicletaBasica.criaAvancada()
    return bicicletaBasica
}

class PrototypeTest {

    @Test
    fun `Prototype`() {
        val bicicleta = Bicicleta()
        val bicicletaBasica = bicicleta.clone()
        val bicicletaAvancada = criaJaguar(bicicletaBasica)
        println("bicicleta: $bicicleta")
        println("bicicleta básica: $bicicletaBasica")
        println("bicicleta avançada: $bicicletaAvancada")

        //assertThat(listener.text).isEqualTo("Text is changed: Lorem ipsum -> dolor sit amet")
    }
}