
/*
Tipue Search 6.1
Copyright (c) 2017 Tipue
Tipue Search is released under the MIT License
http://www.tipue.com/search
*/


/*
Stop words
Stop words list from http://www.ranks.nl/stopwords
*/
var tipuesearch_pages = [
  "https://www.sustainability.gov/index.html", 
  "https://www.sustainability.gov/performance.html", 
  "https://www.sustainability.gov/scorecards.html", 
  "https://www.sustainability.gov/resources.html", 
  "https://www.sustainability.gov/about.html", 
  "https://www.sustainability.gov/archive.html", 
  "https://www.sustainability.gov/archived-resources.html", 
  "https://www.sustainability.gov/contact.html", 
  "https://www.sustainability.gov/contributing-agencies.html", 
  "https://www.sustainability.gov/dhs.html", 
  "https://www.sustainability.gov/doc.html", 
  "https://www.sustainability.gov/dod.html", 
  "https://www.sustainability.gov/doe.html", 
  "https://www.sustainability.gov/doi.html", 
  "https://www.sustainability.gov/doj.html", 
  "https://www.sustainability.gov/dol.html", 
  "https://www.sustainability.gov/dot.html", 
  "https://www.sustainability.gov/ed.html", 
  "https://www.sustainability.gov/epa.html", 
  "https://www.sustainability.gov/government_data.html", 
  "https://www.sustainability.gov/gsa.html", 
  "https://www.sustainability.gov/hhs.html", 
  "https://www.sustainability.gov/hud.html", 
  "https://www.sustainability.gov/mayock.html", 
  "https://www.sustainability.gov/nara.html", 
  "https://www.sustainability.gov/nasa.html", 
  "https://www.sustainability.gov/opm.html", 
  "https://www.sustainability.gov/performance.html", 
  "https://www.sustainability.gov/si.html", 
  "https://www.sustainability.gov/ssa.html",   
  "https://www.sustainability.gov/state.html",   
  "https://www.sustainability.gov/treasury.html",   
  "https://www.sustainability.gov/tva.html",   
  "https://www.sustainability.gov/usace.html",   
  "https://www.sustainability.gov/usda.html",   
  "https://www.sustainability.gov/usps.html",   
  "https://www.sustainability.gov/va.html",   
  "https://www.sustainability.gov/policy.html",
  "https://www.sustainability.gov/ggi/index.html",   
  "https://www.sustainability.gov/ggi/scope.html"   
];

var tipuesearch_stop_words = ["a", "about", "above", "after", "again", "against", "all", "am", "an", "and", "any", "are", "aren't", "as", "at", "be", "because", "been", "before", "being", "below", "between", "both", "but", "by", "can't", "cannot", "could", "couldn't", "did", "didn't", "do", "does", "doesn't", "doing", "don't", "down", "during", "each", "few", "for", "from", "further", "had", "hadn't", "has", "hasn't", "have", "haven't", "having", "he", "he'd", "he'll", "he's", "her", "here", "here's", "hers", "herself", "him", "himself", "his", "how", "how's", "i", "i'd", "i'll", "i'm", "i've", "if", "in", "into", "is", "isn't", "it", "it's", "its", "itself", "let's", "me", "more", "most", "mustn't", "my", "myself", "no", "nor", "not", "of", "off", "on", "once", "only", "or", "other", "ought", "our", "ours", "ourselves", "out", "over", "own", "same", "shan't", "she", "she'd", "she'll", "she's", "should", "shouldn't", "so", "some", "such", "than", "that", "that's", "the", "their", "theirs", "them", "themselves", "then", "there", "there's", "these", "they", "they'd", "they'll", "they're", "they've", "this", "those", "through", "to", "too", "under", "until", "up", "very", "was", "wasn't", "we", "we'd", "we'll", "we're", "we've", "were", "weren't", "what", "what's", "when", "when's", "where", "where's", "which", "while", "who", "who's", "whom", "why", "why's", "with", "won't", "would", "wouldn't", "you", "you'd", "you'll", "you're", "you've", "your", "yours", "yourself", "yourselves"];


// Word replace

var tipuesearch_replace = {'words': [
     {'word': 'tip', 'replace_with': 'tipue'},
     {'word': 'javscript', 'replace_with': 'javascript'},
     {'word': 'jqeury', 'replace_with': 'jquery'}
]};


// Weighting

var tipuesearch_weight = {'weight': [
     {'url': 'http://www.tipue.com', 'score': 20},
     {'url': 'http://www.tipue.com/search', 'score': 30},
     {'url': 'http://www.tipue.com/is', 'score': 10}
]};


// Illogical stemming

var tipuesearch_stem = {'words': [
     {'word': 'e-mail', 'stem': 'email'},
     {'word': 'javascript', 'stem': 'jquery'},
     {'word': 'javascript', 'stem': 'js'}
]};


// Related searches

var tipuesearch_related = {'searches': [
     {'search': 'tipue', 'related': 'Tipue Search'},
     {'search': 'tipue', 'before': 'Tipue Search', 'related': 'Getting Started'},
     {'search': 'tipue', 'before': 'Tipue', 'related': 'jQuery'},
     {'search': 'tipue', 'before': 'Tipue', 'related': 'Blog'}
]};


// Internal strings

var tipuesearch_string_1 = 'No title';
var tipuesearch_string_2 = 'Showing results for';
var tipuesearch_string_3 = 'Search instead for';
var tipuesearch_string_4 = '1 result';
var tipuesearch_string_5 = 'results';
var tipuesearch_string_6 = 'Back';
var tipuesearch_string_7 = 'More';
var tipuesearch_string_8 = 'Nothing found.';
var tipuesearch_string_9 = 'Common words are largely ignored.';
var tipuesearch_string_10 = 'Search too short';
var tipuesearch_string_11 = 'Should be one character or more.';
var tipuesearch_string_12 = 'Should be';
var tipuesearch_string_13 = 'characters or more.';
var tipuesearch_string_14 = 'seconds';
var tipuesearch_string_15 = 'Searches related to';


// Internals


// Timer for showTime

var startTimer = new Date().getTime();

