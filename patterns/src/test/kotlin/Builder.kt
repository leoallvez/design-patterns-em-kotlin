import org.junit.jupiter.api.Test
import java.io.File

// Vamos supor que a classe Dialog seja fornecida por uma biblioteca externa.
// Temos apenas acesso à interface pública do Dialog que não pode ser alterada.

class Dialog {

    fun setTitle(text: String) = println("definindo texto do título: '$text'")
    fun setTitleColor(color: String) = println("definindo a cor do título: $color")
    fun setMessage(text: String) = println("definindo a mensagem: '$text'")
    fun setMessageColor(color: String) = println("definindo a cor da mensagem: $color")
    fun setImage(bitmapBytes: ByteArray) = println("mostrando imagem com tamanho: '${bitmapBytes.size}'")

    fun show() = println("mostrando dialog: $this")
}

// Builder
class DialogBuilder() {

    constructor(init: DialogBuilder.() -> Unit) : this() {
        init()
    }

    private var titleHolder: TextView? = null
    private var messageHolder: TextView? = null
    private var imageHolder: File? = null

    fun title(attributes: TextView.() -> Unit) {
        titleHolder = TextView().apply { attributes() }
    }

    fun message(attributes: TextView.() -> Unit) {
        messageHolder = TextView().apply { attributes() }
    }

    fun image(attributes: () -> File) {
        imageHolder = attributes()
    }

    fun build(): Dialog {
        println("build")
        val dialog = Dialog()

        titleHolder?.apply {
            dialog.setTitle(text)
            dialog.setTitleColor(color)
        }

        messageHolder?.apply {
            dialog.setMessage(text)
            dialog.setMessageColor(color)
        }

        imageHolder?.apply {
            dialog.setImage(readBytes())
        }

        return dialog
    }

    class TextView {
        var text: String = ""
        var color: String = "#00000"
    }
}

//Função que cria o builder dos dialogs e cria o Dialog.
fun dialog(init: DialogBuilder.() -> Unit): Dialog =
    DialogBuilder(init).build()

class BuilderTest {

    @Test
    fun `Builder`() {

        println("Build dialog")

        val dialog: Dialog =
            dialog {
                title {
                    text = "Dialog título"
                }
                message {
                    text = "Dialog mensagem"
                    color = "#333333"
                }
                image {
                    File.createTempFile("image", "jpg")
                }
            }

        println("Mostrar dialog")

        dialog.show()
    }
}