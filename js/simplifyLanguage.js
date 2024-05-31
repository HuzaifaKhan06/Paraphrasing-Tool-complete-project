
const synonymDictionary1 = {
    "happy": ["joyful", "content", "ecstatic"],
    "sad": ["unhappy", "mournful", "depressed"],
};

function simplifyAndParaphrase() {
    const inputTextElement = document.getElementById("inputText");
    const errorMsgElement = document.getElementById("errorMsg");
    const outputTextElement = document.getElementById("outputText");

    const inputText = inputTextElement.value;
    if (inputText.length > 500) {
        errorMsgElement.textContent = "Error: Input exceeds 500 characters.";
        return;
    } else {
        errorMsgElement.textContent = "";
    }

    const simplifiedAndParaphrasedText = simplifyAndParaphraseText(inputText);
    outputTextElement.textContent = simplifiedAndParaphrasedText;
}

function simplifyAndParaphraseText(inputText) {
    const simplifiedText = inputText.toLowerCase();
    const words = simplifiedText.split(' ');
    const paraphrasedWords = words.map(word => {
        if (synonymDictionary1.hasOwnProperty(word.toLowerCase())) {
            const synonyms = synonymDictionary1[word.toLowerCase()];
            return synonyms[Math.floor(Math.random() * synonyms.length)];
        }
        return word;
    });
    const paraphrasedText = paraphrasedWords.join(' ');

    return paraphrasedText;
}