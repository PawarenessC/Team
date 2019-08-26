# Team
PMMP Team Library  

## Language
Select Language: [English](#eng), [日本語](#jpn)




<a name="eng"></a>
# English
I think that you can see how to use it more by looking at SamplePlugin. 

**How to use**  
Please be sure to write in use statement!  
`use Sei\team\T;`  
When you want to call a function  
`T::function()`

**Functions**  

    createTeam(string $teamname)//create new Team! True will be returned if the team has already been created.
    checkTeam(string $teamname)//Make sure that the team exists.Returns true if the team exists, false otherwise.
    checkInTeam(Player $player)//Make sure the player belongs to the team. In that case, it returns true, otherwise it returns false.
    deleteTeam(string $teamname)//Delete the team but return false if the team does not exist.
    joinTeam(string $teamname, Player $player)//Returns false if the player is to join the team but the team does not exist.
    leaveTeam(string $teamname, Player $player)//Player leave team.However, if the team does not exist or does not belong to the team, false is returned.
    getTeamData(string $teamname)//The number of people belonging to that team is returned, but false is returned if the team does not exist.
    getPTeam(Player $player)//Returns the name of the team the player belongs to, but false if the player does not belong to the team.
    getAllPlayer()//The team to which all the players belong is returned as an array.
    getAllTeam()//All teams and the number of people belonging to them are returned as an array.


Thank you for watching! If you have any problems, please do so to Twitter.  
Twitter : <https://twitter.com/MS_SEI0511>

***
<a name="jpn"></a>
# 日本語
詳しい使い方はSamplePluginを見ればわかると思います

**使い方**  
このuse文を追加してください！    
`use Sei\team\T;`  
関数を呼び出す時は   
`T::function()`

**Functions**


    createTeam(string $teamname)//新しいチームを作成します。 既に作成されていた場合はfalseが返されます。
    checkTeam(string $teamname)//そのチームがあるかどうかを確認します。ある場合はtrue 、無い場合はfalse が返されます。
    checkInTeam(Player $player)//プレイヤーがチームに入っているかを確認します。入ってる場合はtrue、入ってない場合はfalseが返されます。
    deleteTeam(string $teamname)//チームを削除します。削除に成功した場合はtrue、失敗した場合はfalseが返されます。
    joinTeam(string $teamname, Player $player)//プレイヤーをチームに参加させます。チームに参加できた場合はtrue、参加に失敗した時はfalseが返されます。
    leaveTeam(string $teamname, Player $player)//プレイヤーをチームから脱退させます。チームから脱退できた場合はtrue、脱退に失敗した時はfalseが返されます。
    getTeamData(string $teamname)//チームに所属する人数を確認します。チームが存在しない場合はnullが返されます。
    getPTeam(Player $player)//プレイヤーが所属するチームを確認します。チームに参加してない場合はnullが返されます。
    getAllPlayer()//全てのチームに所属しているプレイヤーが配列で返されます
    getAllTeam()//存在するチームが配列で返されます


ここまで見て頂いてありがとうございます！ 何か問題かがありましたらTwitterまでお願いします    
Twitter : <https://twitter.com/MS_SEI0511>
