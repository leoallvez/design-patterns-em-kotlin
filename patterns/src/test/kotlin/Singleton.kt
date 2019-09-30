import org.assertj.core.api.Assertions.assertThat
import org.junit.jupiter.api.Test

object Impressora {
    init {
        println("Inicializando o objeto: $this")
    }

    fun imprimir(): Impressora = apply { println("Imprimindo objeto: $this") }
}

class SingletonTest {

    @Test
    fun `Singleton`() {
        println("Start")
        val impressora1 = Impressora.imprimir()
        val impressora2 = Impressora.imprimir()

        assertThat(impressora1).isSameAs(Impressora)
        assertThat(impressora2).isSameAs(Impressora)
    }
}
