import org.w3c.dom.HTMLBodyElement
import org.w3c.dom.HTMLButtonElement
import org.w3c.dom.HTMLElement
import kotlin.browser.*


fun main(args: Array<String>) {
    val modal = document.getElementById("myModal") as HTMLBodyElement
    val button = document.getElementById("loginBtn") as HTMLButtonElement
    val span = document.getElementsByClassName("close") as HTMLElement
    button.addEventListener("click", {
        modal.style.display = "block"
    })
    span.addEventListener("click", {
        modal.style.display = "none"
    })
    window.addEventListener("click", { event ->
        if (event.target == window) {
            modal.style.display = "none"
        }
    })

}