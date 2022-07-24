const inputElements = [...document.querySelectorAll("input.code-input")];

inputElements.forEach((ele, index) => {
    ele.addEventListener("input", (e) => {
        const [first] = e.target.value;
        e.target.value = first ?? "";
        const lastInputBox = index === inputElements.length - 1;
        const insertedContent = first !== undefined;
        if (insertedContent && !lastInputBox) {
            inputElements[index + 1].removeAttribute("disabled");
            inputElements[index + 1].focus();
            inputElements[index + 1].dispatchEvent(new Event("input"));
        }
        if (insertedContent && lastInputBox) {
            document.getElementById("code-submit-btn").classList.remove("disabled");
        }
    });
});