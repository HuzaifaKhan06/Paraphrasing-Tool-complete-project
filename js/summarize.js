// Summarizer

function summarize() {
    var inputText = document.getElementById("inputText").value;
    var sentences = inputText.split('.');
    var numSentences = Math.round(sentences.length * 0.3);
    sentences.sort(function(a, b) {
        return a.split(' ').length - b.split(' ').length;
    });
    var summary = sentences.slice(0, numSentences);
    document.getElementById("summary").innerText = summary.join('. ');
}
