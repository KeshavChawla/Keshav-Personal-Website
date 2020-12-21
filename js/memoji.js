// Used to randomize emoji per page
function getMemojiImage() {
    var memojiImage = "memoji-";
    var memoji_integer = Math.floor(Math.random() * 33);     // returns a random integer from 0 to 5
    memojiImage +=  memoji_integer;
    memojiImage += ".png";
    return memojiImage;  // 
    
  }
  