import org.assertj.core.api.Assertions.assertThat
import org.junit.jupiter.api.Test

open abstract class Pais {
    object EUA : Pais()
}

class Espanha : Pais()
class Grecia(val algumaPropriedade: String) : Pais()
class Canada(val algumaPropriedade: String) : Pais()
//Produto concreto.
class Moeda(val code: String)
//Creator.
object MoedaFactory {

    fun moedaPorPais(pais: Pais): Moeda = when (pais) {
        is Grecia   -> Moeda("EUR")
        is Espanha  -> Moeda("EUR")
        is Pais.EUA -> Moeda("USD")
        else        -> Moeda("CAD")
    }
}

class FactoryMethodTest {

    @Test
    fun `FactoryMethod`() {
        val moedaGrecia = MoedaFactory.moedaPorPais(Grecia("")).code
        println("Moeda da Grécia: $moedaGrecia")

        val moedaEUA = MoedaFactory.moedaPorPais(Pais.EUA).code
        println("Moeda dos EUA: $moedaEUA")

        assertThat(moedaGrecia).isEqualTo("EUR")
        assertThat(moedaEUA).isEqualTo("USD")
    }
}