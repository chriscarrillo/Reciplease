import org.w3c.dom.HTMLElement
import kotlin.browser.*

fun main(args: Array<String>) {
    window.onload = {
        var centerBox = document.getElementById("centerBox")!! as HTMLElement
        var centerBoxHeight: Double = centerBox.clientHeight.toDouble()
        var redBox = document.getElementById("redBox")!! as HTMLElement
        var redBoxHeight: Double = redBox.clientHeight.toDouble()

        if (redBoxHeight != centerBoxHeight) {
            redBox.style.height = centerBoxHeight.toString() + "px"
            redBox.style.opacity = "1"
        }
    }
}