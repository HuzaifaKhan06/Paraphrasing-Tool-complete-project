// Paraphrase 
const synonymDictionary = {
    "happy": ["joyful", "content", "ecstatic"],
    "sad": ["unhappy", "mournful", "depressed"],
    "abandon": ["forsake", "leave", "desert"],
"abate": ["diminish", "decrease", "lessen"],
"abide": ["endure", "tolerate", "bear"],
"abrupt": ["sudden", "unexpected", "hasty"],
"absurd": ["ridiculous", "ludicrous", "nonsensical"],
"abundant": ["plentiful", "profuse", "ample"],
"accelerate": ["speed up", "quicken", "hasten"],
"accept": ["acknowledge", "approve", "welcome"],
"accessible": ["reachable", "approachable", "available"],
"accommodate": ["adjust", "adapt", "oblige"],
"accuse": ["blame", "charge", "incriminate"],
"achieve": ["accomplish", "attain", "fulfill"],
"adequate": ["sufficient", "suitable", "acceptable"],
"adore": ["admire", "worship", "revere"],
"adorn": ["decorate", "embellish", "ornament"],
"adversary": ["opponent", "enemy", "foe"],
"affectionate": ["loving", "devoted", "tender"],
"affirm": ["confirm", "assert", "declare"],
"agile": ["nimble", "quick", "lively"],
"allure": ["attract", "entice", "charm"],
"amiable": ["friendly", "pleasant", "good-natured"],
"animate": ["lively", "vibrant", "dynamic"],
"annoy": ["irritate", "bother", "vex"],
"appreciate": ["value", "treasure", "recognize"],
"ardent": ["passionate", "enthusiastic", "eager"],
"aspire": ["ambition", "aim", "desire"],
"assure": ["guarantee", "promise", "confirm"],
"astonish": ["amaze", "surprise", "stun"],
"attractive": ["appealing", "charming", "captivating"],
"authentic": ["genuine", "real", "legitimate"],
"awe": ["admiration", "wonder", "reverence"],
"abase": ["degrade", "humiliate", "disgrace"],
"aberration": ["deviation", "anomaly", "irregularity"],
"abhor": ["detest", "loathe", "despise"],
"abound": ["overflow", "teem", "swarm"],
"abrasive": ["grating", "harsh", "rough"],
"absolve": ["exonerate", "pardon", "forgive"],
"abstruse": ["complex", "obscure", "esoteric"],
"acclaim": ["praise", "applaud", "commend"],
"acquiesce": ["comply", "yield", "concede"],
"adamant": ["inflexible", "unyielding", "stubborn"],
"adept": ["skilled", "proficient", "competent"],
"admonish": ["rebuke", "reprimand", "chastise"],
"adorn": ["decorate", "embellish", "ornament"],
"adroit": ["skillful", "clever", "deft"],
"adulation": ["flattery", "praise", "worship"],
"adversity": ["hardship", "misfortune", "trouble"],
"aesthetic": ["artistic", "beautiful", "tasteful"],
"affluent": ["wealthy", "prosperous", "rich"],
"aggrandize": ["enlarge", "exaggerate", "inflate"],
"alleviate": ["relieve", "mitigate", "ease"],
"aloof": ["distant", "detached", "reserved"],
"altruistic": ["selfless", "benevolent", "generous"],
"ambivalent": ["uncertain", "indecisive", "conflicted"],
"amiable": ["friendly", "pleasant", "good-natured"],
"amplify": ["intensify", "augment", "increase"],
"analogous": ["similar", "comparable", "equivalent"],
"anguish": ["distress", "suffering", "torment"],
"animosity": ["hostility", "hatred", "resentment"],
"anomaly": ["aberration", "irregularity", "deviation"],
"antagonize": ["provoke", "irritate", "oppose"],
"aplomb": ["poise", "confidence", "assurance"],
"apprehensive": ["anxious", "worried", "nervous"],
"arduous": ["difficult", "challenging", "demanding"],
"articulate": ["expressive", "eloquent", "fluent"],
"ascendancy": ["dominance", "control", "supremacy"],
"assiduous": ["diligent", "hardworking", "persistent"],
"astute": ["perceptive", "shrewd", "clever"],
"augment": ["increase", "enlarge", "expand"],
"auspicious": ["favorable", "fortunate", "lucky"],
"authentic": ["genuine", "real", "legitimate"],
"avarice": ["greed", "covetousness", "rapacity"],
"benevolent": ["kind", "generous", "charitable"],
"boisterous": ["loud", "noisy", "rowdy"],
"brusque": ["abrupt", "blunt", "curt"],
"cacophony": ["dissonance", "clamor", "noise"],
"camaraderie": ["friendship", "companionship", "fellowship"],
"candor": ["honesty", "frankness", "openness"],
"capitulate": ["surrender", "yield", "submit"],
"cautious": ["prudent", "careful", "wary"],
"circumspect": ["cautious", "prudent", "careful"],
"clairvoyant": ["intuitive", "perceptive", "psychic"],
"clandestine": ["secret", "covert", "hidden"],
"coalesce": ["merge", "unite", "blend"],
"complacent": ["self-satisfied", "smug", "content"],
"conciliate": ["placate", "appease", "pacify"],
"condescend": ["patronize", "pat", "talk down to"],
"conundrum": ["puzzle", "enigma", "mystery"],
"convergence": ["meeting", "intersection", "joining"],
"copious": ["abundant", "plentiful", "profuse"],
"cordial": ["friendly", "warm", "affable"],
"cryptic": ["mysterious", "enigmatic", "ambiguous"],
"culminate": ["reach the highest point", "peak", "climax"],
"cumbersome": ["awkward", "bulky", "unwieldy"],
"debilitate": ["weaken", "enfeeble", "sap"],
"deceptive": ["misleading", "tricky", "fraudulent"],
"decipher": ["interpret", "decode", "unravel"],
"deference": ["respect", "veneration", "reverence"],
"delectable": ["delicious", "tasty", "appetizing"],
"denounce": ["condemn", "criticize", "censure"],
"deride": ["mock", "ridicule", "scorn"],
"desolate": ["deserted", "barren", "empty"],
"deviate": ["depart", "diverge", "stray"],
"devotion": ["dedication", "loyalty", "commitment"],
"diffident": ["shy", "timid", "reserved"],
"disparate": ["distinct", "different", "divergent"],
"disperse": ["scatter", "distribute", "spread"],
"divulge": ["reveal", "disclose", "expose"],
"eccentric": ["unconventional", "quirky", "odd"],
"eclectic": ["diverse", "varied", "broad"],
"effervescent": ["bubbly", "lively", "animated"],
"egregious": ["flagrant", "outrageous", "shocking"],
"elucidate": ["clarify", "explain", "illuminate"],
"empathy": ["understanding", "compassion", "sensitivity"],
"emulate": ["imitate", "mimic", "copy"],
"encompass": ["include", "incorporate", "enfold"],
"endeavor": ["attempt", "strive", "try"],
"enigmatic": ["mysterious", "puzzling", "cryptic"],
"ephemeral": ["transient", "fleeting", "short-lived"],
"equivocal": ["ambiguous", "uncertain", "doubtful"],
"erudite": ["knowledgeable", "learned", "scholarly"],
"esoteric": ["obscure", "arcane", "mystical"],
"euphoric": ["elated", "exhilarated", "joyful"],
"exacerbate": ["aggravate", "worsen", "intensify"],
"exemplify": ["illustrate", "demonstrate", "typify"],
"exuberant": ["vibrant", "energetic", "enthusiastic"],
"facade": ["front", "exterior", "mask"],
"facetious": ["humorous", "witty", "funny"],
"fallacy": ["misconception", "deception", "illusion"],
"fastidious": ["meticulous", "precise", "demanding"],
"feasible": ["possible", "achievable", "practical"],
"ferocious": ["fierce", "violent", "savage"],
"flabbergasted": ["astonished", "shocked", "amazed"],
"flourish": ["thrive", "prosper", "blossom"],
"formidable": ["intimidating", "daunting", "imposing"],
"forthcoming": ["upcoming", "approaching", "impending"],
"fortuitous": ["fortunate", "lucky", "serendipitous"],
"frugal": ["economical", "thrifty", "sparing"],
"furtive": ["secretive", "stealthy", "covert"],
"garner": ["gather", "collect", "accumulate"],
"gregarious": ["sociable", "friendly", "outgoing"],
"guile": ["cunning", "deceit", "slyness"],
"harangue": ["lecture", "rant", "tirade"],
"haughty": ["arrogant", "snobbish", "proud"],
"heed": ["pay attention", "listen", "observe"],
"heinous": ["atrocious", "horrific", "outrageous"],
"heresy": ["blasphemy", "unorthodoxy", "nonconformity"],
"hubris": ["arrogance", "pride", "egotism"],
"immutable": ["unchangeable", "invariable", "unchanging"],
"imperative": ["essential", "crucial", "vital"],
"impervious": ["resistant", "impenetrable", "invulnerable"],
"implacable": ["relentless", "unyielding", "unforgiving"],
"implicit": ["understood", "implied", "unspoken"],
"incandescent": ["radiant", "brilliant", "glowing"],
"incisive": ["sharp", "penetrating", "discerning"],
"incongruous": ["inconsistent", "incompatible", "discordant"],
"incontrovertible": ["indisputable", "undeniable", "irrefutable"],
"incorrigible": ["unmanageable", "uncontrollable", "hopeless"],
"indigenous": ["native", "original", "inborn"],
"indulgent": ["lenient", "permissive", "tolerant"],
"inevitable": ["unavoidable", "certain", "inevitable"],
"infallible": ["unerring", "flawless", "impeccable"],
"ingenuous": ["innocent", "naive", "artless"],
"inherent": ["intrinsic", "innate", "built-in"],
"innovative": ["creative", "original", "inventive"],
"inquisitive": ["curious", "inquiring", "probing"],
"insatiable": ["unquenchable", "voracious", "immeasurable"],
"insidious": ["stealthy", "treacherous", "deceptive"],
"insipid": ["bland", "dull", "uninteresting"],
"instigate": ["provoke", "incite", "stimulate"],
"insurgent": ["rebel", "revolutionary", "dissenter"],
"intrepid": ["fearless", "courageous", "brave"],
"invigorate": ["energize", "revitalize", "refresh"],
"irrevocable": ["unalterable", "immutable", "unchangeable"],
"juxtapose": ["compare", "contrast", "collate"],
"lament": ["mourn", "grieve", "lament"],
"languid": ["listless", "lethargic", "sluggish"],
"laudable": ["praiseworthy", "commendable", "admirable"],
"lethargy": ["apathy", "indolence", "sluggishness"],
"levity": ["lightheartedness", "humor", "playfulness"],
"loquacious": ["talkative", "chatty", "garrulous"],
"lucid": ["clear", "transparent", "intelligible"],
"magnanimous": ["generous", "forgiving", "benevolent"],
"malevolent": ["malicious", "evil", "wicked"],
"malleable": ["pliant", "flexible", "adaptable"],
"manifest": ["evident", "apparent", "obvious"],
"meticulous": ["precise", "thorough", "careful"],
"mitigate": ["alleviate", "ease", "relieve"],
"modicum": ["small amount", "trace", "fragment"],
"morose": ["sullen", "gloomy", "dismal"],
"nefarious": ["wicked", "evil", "villainous"],
"nonchalant": ["indifferent", "unconcerned", "casual"],
"obfuscate": ["confuse", "bewilder", "muddle"],
"oblivion": ["forgetfulness", "amnesia", "obliviousness"],
"obsequious": ["servile", "submissive", "compliant"],
"obtuse": ["dull-witted", "insensitive", "stupid"],
"ostracize": ["exclude", "shun", "banish"],
"paradox": ["contradiction", "puzzle", "enigma"],
"paragon": ["model", "exemplar", "ideal"],
"perfidious": ["treacherous", "deceitful", "disloyal"],
"perfunctory": ["routine", "mechanical", "automatic"],
"pernicious": ["harmful", "destructive", "malevolent"],
"pertinent": ["relevant", "applicable", "appropriate"],
"plausible": ["believable", "credible", "reasonable"],
"plethora": ["abundance", "excess", "surplus"],
"precarious": ["unstable", "precarious", "dangerous"],
"preclude": ["prevent", "hinder", "obviate"],
"predilection": ["preference", "inclination", "liking"],
"preemptive": ["anticipatory", "preventive", "proactive"],
"profound": ["deep", "meaningful", "significant"],
"prolific": ["productive", "creative", "fruitful"],
"prosaic": ["ordinary", "mundane", "commonplace"],
"abide": ["persist", "tolerate", "withstand"],
"abode": ["dwelling", "residence", "habitat"],
"absolve": ["exonerate", "forgive", "pardon"],
"abundant": ["copious", "bountiful", "plenteous"],
"acclaim": ["praise", "applaud", "commend"],
"accomplish": ["achieve", "attain", "realize"],
"adept": ["skillful", "proficient", "expert"],
"adorn": ["embellish", "decorate", "ornament"],
"adroit": ["clever", "skilled", "dexterous"],
"adulation": ["praise", "flattery", "admiration"],
"affluent": ["wealthy", "prosperous", "rich"],
"agile": ["nimble", "quick", "spry"],
"alleviate": ["relieve", "mitigate", "ease"],
"allure": ["tempt", "entice", "captivate"],
"aloof": ["distant", "reserved", "detached"],
"amiable": ["friendly", "pleasant", "cordial"],
"aplomb": ["confidence", "assurance", "poise"],
"aptitude": ["capability", "talent", "gift"],
"arduous": ["challenging", "difficult", "demanding"],
"assuage": ["alleviate", "ease", "relieve"],
"astute": ["perceptive", "shrewd", "clever"],
"augment": ["increase", "enlarge", "expand"],
"auspicious": ["favorable", "promising", "propitious"],
"authentic": ["genuine", "real", "legitimate"],
"avarice": ["greed", "covetousness", "rapacity"],
"benevolent": ["kind-hearted", "generous", "charitable"],
"bewilder": ["confuse", "baffle", "perplex"],
"bolster": ["support", "reinforce", "strengthen"],
"brevity": ["conciseness", "shortness", "briefness"],
"capitulate": ["surrender", "yield", "submit"],
"celestial": ["heavenly", "divine", "ethereal"],
"circumvent": ["bypass", "evade", "avoid"],
"clairvoyant": ["perceptive", "intuitive", "psychic"],
"clandestine": ["secret", "covert", "hidden"],
"coalesce": ["merge", "unite", "blend"],
"compassion": ["sympathy", "empathy", "kindness"],
"concur": ["agree", "cooperate", "collaborate"],
"conundrum": ["puzzle", "riddle", "enigma"],
"copious": ["abundant", "plentiful", "profuse"],
"deft": ["skillful", "nimble", "dexterous"],
"demure": ["reserved", "modest", "shy"],
"depict": ["portray", "describe", "illustrate"],
"destitute": ["poor", "impoverished", "needy"],
"disparate": ["distinct", "different", "varied"],
"divulge": ["reveal", "disclose", "share"],
"eccentric": ["unconventional", "quirky", "odd"],
"elaborate": ["detailed", "intricate", "complex"],
"elation": ["joy", "euphoria", "exhilaration"],
"eloquent": ["articulate", "expressive", "fluent"],
"empathy": ["compassion", "understanding", "sensitivity"],
"endeavor": ["attempt", "strive", "try"],
"enigmatic": ["mysterious", "puzzling", "cryptic"],
"ephemeral": ["transient", "fleeting", "brief"],
"equivocate": ["dodge", "evade", "equivocate"],
"esoteric": ["obscure", "arcane", "mysterious"],
"exemplary": ["outstanding", "commendable", "admirable"],
"exuberant": ["energetic", "lively", "vibrant"],
"facetious": ["humorous", "witty", "jocular"],
"fastidious": ["meticulous", "precise", "picky"],
"furtive": ["stealthy", "secretive", "sneaky"],
"gregarious": ["sociable", "friendly", "outgoing"],
"harangue": ["rant", "tirade", "diatribe"],
"haughty": ["arrogant", "snobbish", "condescending"],
"immaculate": ["flawless", "spotless", "pure"],
"imminent": ["impending", "approaching", "forthcoming"],
"incognito": ["disguised", "anonymous", "hidden"],
"indulgent": ["lenient", "permissive", "tolerant"],
"inquisitive": ["curious", "inquiring", "interested"],
"insatiable": ["unquenchable", "unappeasable", "voracious"],
"intrepid": ["fearless", "courageous", "bold"],
"irresolute": ["indecisive", "hesitant", "wavering"],
"juxtapose": ["compare", "contrast", "confront"],
"laconic": ["concise", "brief", "terse"],
"lethargic": ["sluggish", "apathetic", "inactive"],
"loquacious": ["talkative", "chatty", "verbose"],
"magnanimous": ["generous", "benevolent", "charitable"],
"meticulous": ["careful", "thorough", "precise"],
"mirth": ["joy", "merriment", "glee"],
"nefarious": ["wicked", "villainous", "sinister"],
"nonchalant": ["casual", "indifferent", "unconcerned"],
"obfuscate": ["confuse", "bewilder", "muddle"],
"oblivion": ["forgetfulness", "amnesia", "unawareness"],
"opaque": ["non-transparent", "cloudy", "murky"],
"pensive": ["thoughtful", "reflective", "contemplative"],
"perceptive": ["observant", "discerning", "insightful"],
"perfidious": ["treacherous", "betraying", "faithless"],
"placid": ["calm", "serene", "tranquil"],
"plausible": ["credible", "believable", "reasonable"],
"quixotic": ["idealistic", "impractical", "unrealistic"],
"reclusive": ["solitary", "isolated", "secluded"],
"resilient": ["adaptable", "robust", "strong"],
"resolute": ["determined", "steadfast", "unyielding"],
"reticent": ["reserved", "quiet", "shy"],
"rhapsody": ["ecstasy", "euphoria", "delight"],
"salient": ["prominent", "noteworthy", "conspicuous"],
"serendipity": ["fortuity", "fortunateness", "chance"],
"stoic": ["unemotional", "indifferent", "apathetic"],
"sublime": ["awe-inspiring", "majestic", "exalted"],
"superfluous": ["excessive", "unnecessary", "redundant"],
"taciturn": ["reserved", "silent", "uncommunicative"],
"tenacious": ["persistent", "determined", "unyielding"],
"ubiquitous": ["widespread", "everywhere", "omnipresent"],
"unctuous": ["oily", "smarmy", "insincere"],
"vehement": ["passionate", "fervent", "intense"],
"verbose": ["wordy", "long-winded", "rambling"],
"wistful": ["nostalgic", "yearning", "longing"],
"zealous": ["enthusiastic", "passionate", "ardent"],
"radiant": ["shining", "luminous", "glowing"],
"brightened": ["illuminated", "enlightened", "cheered"],
"heavens": ["sky", "firmament", "celestial sphere"],
"youngsters": ["children", "youth", "juveniles"],
"frolicked": ["played", "romped", "gambolled"],
"playground": ["recreation area", "play area", "park"],
"mirth": ["joy", "glee", "happiness"],
"resonating": ["echoing", "vibrating", "ringing"],
"atmosphere": ["air", "ambiance", "environment"],
"vibrant": ["lively", "colorful", "dynamic"],
"blossoms": ["flowers", "blooms", "floral"],
"swayed": ["rocked", "oscillated", "swung"],
"delicately": ["lightly", "gently", "tenderly"],
"mild": ["gentle", "temperate", "moderate"],
"breeze": ["wind", "draught", "gust"],
"families": ["households", "kin", "relatives"],
"assembled": ["gathered", "collected", "convened"],
"outdoor": ["outside", "open-air", "alfresco"],
"meals": ["food", "repasts", "dinners"],
"verdant": ["green", "lush", "leafy"],
"lawn": ["yard", "grassland", "turf"],
"feathered": ["bird", "winged", "plumed"],
"creatures": ["animals", "beings", "organisms"],
"chirped": ["tweeted", "sang", "warbled"],
"joyfully": ["happily", "merrily", "gleefully"],
"branches": ["limbs", "boughs", "twigs"],
"contributing": ["adding", "contributing to", "enhancing"],
"animated": ["lively", "spirited", "vivacious"],
"ambiance": ["atmosphere", "mood", "surroundings"],
"Gelato": ["ice cream", "frozen dessert", "sorbet"],
"trucks": ["vehicles", "lorries", "vans"],
"echoed": ["reverberated", "resounded", "repeated"],
"joyful": ["happy", "delighted", "pleased"],
"melodies": ["tunes", "music", "harmonies"],
"presenting": ["offering", "providing", "displaying"],
"delectable": ["delicious", "tasty", "scrumptious"],
"treats": ["sweets", "desserts", "indulgences"],
"elated": ["ecstatic", "overjoyed", "exhilarated"],
"children": ["kids", "youth", "youngsters"],
"uncomplicated": ["simple", "straightforward", "easy"],
"delight": ["pleasure", "joy", "happiness"],
"sunlit": ["sunshine-filled", "sunny", "bright"],
"grins": ["smiles", "smirks", "beam"],
"every": ["each", "all", "each and every"],
"face": ["countenance", "visage", "expression"],
"crafting": ["creating", "forming", "shaping"],
"flawless": ["perfect", "impeccable", "faultless"],
"instant": ["moment", "second", "minute"],
"joy": ["happiness", "delight", "glee"],
"repose": ["rest", "relaxation", "calm"],
"relish": ["enjoy", "savor", "appreciate"],


};

function paraphrase() {
    const inputTextElement = document.getElementById("inputText");
    const errorTextElement = document.getElementById("errorText");
    const paraphrasedTextElement = document.getElementById("paraphrasedText");

    const inputText = inputTextElement.value.trim();

    if (inputText === "") {
        errorTextElement.textContent = "Error: Please enter text to paraphrase.";
        paraphrasedTextElement.textContent = "";  
    } else if (getWordCount(inputText) > 500) {
        errorTextElement.textContent = "Error: Exceeded 500 words limit.";
        paraphrasedTextElement.textContent = "";  
    } else {
        errorTextElement.textContent = "";
        const paraphrasedText = paraphraseText(inputText);
        paraphrasedTextElement.textContent = paraphrasedText;
    }
}

function paraphraseText(inputText) {
    const words = inputText.split(' ');

    const paraphrasedWords = words.map(word => {
        if (synonymDictionary.hasOwnProperty(word.toLowerCase())) {
            const synonyms = synonymDictionary[word.toLowerCase()];
            return synonyms[Math.floor(Math.random() * synonyms.length)];
        }
        return word;
    });

    const paraphrasedText = paraphrasedWords.join(' ');

    return paraphrasedText;
}

function getWordCount(text) {
    const trimmedText = text.trim();
    const wordCount = trimmedText.split(/\s+/).length;
    return wordCount;
}
function disableParaphraseButton() {
    const paraphraseButton = document.querySelector('.btnParaphrase');
    paraphraseButton.disabled = true;
}
function showTimer() {
    const timerElement = document.createElement('p');
    const timerContainer = document.querySelector('.paraphrasingDiv');

    let secondsRemaining = 24 * 60 * 60; 

    function updateTimer() {
        const hours = Math.floor(secondsRemaining / 3600);
        const minutes = Math.floor((secondsRemaining % 3600) / 60);
        const seconds = secondsRemaining % 60;

        timerElement.textContent = `Please wait ${hours}h ${minutes}m ${seconds}s before your next paraphrase attempt.`;

        if (secondsRemaining <= 0) {
            timerContainer.removeChild(timerElement);
            enableParaphraseButton();
        } else {
            secondsRemaining--;
            setTimeout(updateTimer, 1000);
        }
    }
    updateTimer();

    timerContainer.appendChild(timerElement);
}

function enableParaphraseButton() {
    const paraphraseButton = document.querySelector('.btnParaphrase');
    paraphraseButton.disabled = false;
}

function checkSubscriptionAndLimit() {
    console.log('checkSubscriptionAndLimit called');
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'update_clicks.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                const responseText = xhr.responseText.trim();
                console.log('Raw Response:', responseText);
                if (responseText) {
                    try {
                        const response = JSON.parse(responseText);
                        console.log('Parsed Response:', response);

                        if (response.success) {
                            const clicksRemaining = response.message;

                            if (clicksRemaining <= 0) {
                                disableParaphraseButton();
                                showTimer();
                            }
                        } else {
                            console.error(response.message);
                            
                        }
                    } catch (e) {
                        console.error('Error parsing JSON:', e);
                        console.log('JSON response:', responseText);
                    }
                    
                        window.location.href = 'login.php'; 
                    
                } else {
                    console.error('Empty response from the server');
                }
            } else {
                console.error('HTTP request failed with status:', xhr.status);
            }
        }
    };
    xhr.send('id=' + userId);
    
}

window.onload = function () {
    checkSubscriptionAndLimit();
};
