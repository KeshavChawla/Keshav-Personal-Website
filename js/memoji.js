// Used to randomize emoji per page
function getMemojiImage() {
  var memojiImage = "memoji-";
  var memoji_integer = Math.floor(Math.random() * 34); // returns a random integer from 0 to 5
  memojiImage += memojiParseOut(memoji_integer);
  memojiImage += ".png";
  return memojiImage; //
}
10, 30, 18, 5;
// Check which specifc memojis to parse out
function memojiParseOut(integer_passed) {
  if (integer_passed == 10 || integer_passed == 30) {
    return 3;
  } else if (integer_passed == 18 || integer_passed == 5) {
    return 26;
  } else {
    return integer_passed;
  }
}
