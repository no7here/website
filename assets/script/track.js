$.getJSON("https://beta-api.stats.fm/api/v1/users/zp8o4bf6stiyic8w713dtxqe2/streams/current", function(data) {
    if (data["item"]["isPlaying"] == true) {
        document.getElementById("trackStatus").innerHTML = "Now Playing";
    } else {
        document.getElementById("trackStatus").innerHTML = "Last Played";
    }

    document.getElementById("trackImg").src = data["item"]["track"]["albums"][0]["image"];
    document.getElementById("trackImg").alt = data["item"]["track"]["albums"][0]["name"] + " by " + data["item"]["track"]["artists"][0]["name"];
    document.getElementById("trackName").innerHTML = data["item"]["track"]["name"];
    document.getElementById("trackInfo").innerHTML = data["item"]["track"]["albums"][0]["name"] + " • " + data["item"]["track"]["artists"][0]["name"];
});