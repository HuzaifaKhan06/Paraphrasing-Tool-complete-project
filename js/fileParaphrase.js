//File Paraphrase


let paraphrasedText = "";
  
async function paraphrase() {
    const fileInput = document.getElementById("fileInput");
    const resultParagraph = document.getElementById("result");
    const downloadLink = document.getElementById("downloadLink");
    const uploadIcon = document.getElementById("uploadIcon");
    const downloadIcon = document.getElementById("downloadIcon");

    if (fileInput.files.length > 0) {
        const file = fileInput.files[0];
        const text = await readFile(file);
        paraphrasedText = paraphraseText(text);

        
        uploadIcon.style.display = 'inline';
        downloadIcon.style.display = 'inline';
        downloadLink.style.display = 'inline';

       
        resultParagraph.innerText = "File uploaded and paraphrased successfully.";
    } else {
        resultParagraph.innerText = "Please upload a valid text file.";
        downloadLink.style.display = 'none';
        uploadIcon.style.display = 'none';
        downloadIcon.style.display = 'none';
    }
}

function downloadParaphrasedText() {
    const blob = new Blob([paraphrasedText], { type: 'application/octet-stream' });
    const url = URL.createObjectURL(blob);
    const a = document.createElement('a');
    a.href = url;
    a.download = 'paraphrased_text.txt';
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
    URL.revokeObjectURL(url);
}

function readFile(file) {
    return new Promise((resolve, reject) => {
        const reader = new FileReader();
        reader.onload = (event) => resolve(event.target.result);
        reader.onerror = (error) => reject(error);
        reader.readAsText(file);
    });
}

function paraphraseText(text) {
    return text.toUpperCase();
}
