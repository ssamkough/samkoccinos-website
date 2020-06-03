// functions
const randomColor = () => "#" + Math.random().toString(16).substr(-6);
const changeColor = () => (document.body.style.backgroundColor = randomColor());
const playHamAudio = () => {
  let audioElem = document.getElementById("ham-audio");
  audioElem.play();
};
const playYagaDoobieAudio = () => {
  let audioElem = document.getElementById("yaga-doobie-audio");
  audioElem.play();
};

document.onreadystatechange = () => {
  if (document.readyState === "complete") {
    // variables
    const hamAudioButton = document.getElementById("ham-audio-button");
    const yagaDoobieAudioButton = document.getElementById(
      "yaga-doobie-audio-button"
    );

    // functions
    changeColor();

    // add listeners
    hamAudioButton.addEventListener("click", playHamAudio);
    yagaDoobieAudioButton.addEventListener("click", playYagaDoobieAudio);
  }
};

setInterval(() => {
  changeColor();
}, 400);
