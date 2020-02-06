import org.assertj.core.api.Assertions.assertThat
import org.junit.jupiter.api.Test
import java.math.BigDecimal

interface Temperatura {
    var temperatura: Double
}

class Celsius(override var temperatura: Double) : Temperatura

class Fahrenheit(private var celsius: Celsius) : Temperatura {

    override var temperatura: Double
        get() = celsiusToFahrenheit(celsius.temperatura)
        set(temperatureInF) {
            celsius.temperatura = fahrenheitToCelsius(temperatureInF)
        }

    private fun fahrenheitToCelsius(fahrenheit: Double): Double =
        ((BigDecimal.valueOf(fahrenheit).setScale(2) - BigDecimal(32)) * BigDecimal(5) / BigDecimal(9))
            .toDouble()


    private fun celsiusToFahrenheit(celsius: Double): Double =
        ((BigDecimal.valueOf(celsius).setScale(2) * BigDecimal(9) / BigDecimal(5)) + BigDecimal(32))
            .toDouble()
}

class AdapterTest {

    @Test
    fun `Adapter`() {
        val celsius = Celsius(0.0)
        val fahrenheit = Fahrenheit(celsius)

        celsius.temperatura = 36.6
        println("${celsius.temperatura} C -> ${fahrenheit.temperatura} F")

        assertThat(fahrenheit.temperatura).isEqualTo(97.88)

        fahrenheit.temperatura = 100.0
        println("${fahrenheit.temperatura} F -> ${celsius.temperatura} C")

        assertThat(celsius.temperatura).isEqualTo(37.78)
    }
}
