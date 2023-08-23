#
# Execute remote as:
# curl -s https://raw.githubusercontent.com/dbwebb-se/webtec/master/example/bash/troubleshoot_wsl.bash | bash
#
# WSL network explained:
#  https://stackoverflow.com/questions/64763147/access-a-localhost-running-in-windows-from-inside-wsl2
#
# mDNS explained:
#  https://techcommunity.microsoft.com/t5/networking-blog/mdns-in-the-enterprise/ba-p/3275777
#
# Additional details in PowerShell
#
# Get the IP address
#  Get-NetIPAddress
#
# Show the ip adress, look for preferred
#  ipconfig /all
#
# Check what version on WSL
#  wsl --list --verbose
#
# Show ipaddress of running WSL (?)
#  wsl hostname -i
#
# Show hostname and ping it
#  hostname
#  ping $( hostname ).local
#
# Verify that mDNS is up and running
#  Get-NetUDPEndpoint -LocalPort 5353 | Select-Object LocalAddress,LocalPort,OwningProcess,@{ Name="ProcessName"; Expression={((Get-Process -Id $_.OwningProcess).Name )} }
# then do with the OwningProcess from `svchost`
#  tasklist /SVC /FI "PID eq <OwningProcess>"
#

printf "# Details on your release: "
lsb_release -a

printf "# You are:                   %s\n" "$( whoami )"
printf "# Your'e home directory is:  %s\n" "$HOME"

printf "# Your hostname is:          %s\n" "$( hostname )"

declare -A address
address[public]=$( curl -s http://ipinfo.io/ip )
printf "# Your public ip address is: %s\n" "${address[public]}"

address[wsl]=$( ip addr show eth0 | grep -oP '(?<=inet\s)\d+(\.\d+){3}' )
printf "# Your WSL ip address is:    %s\n" "${address[wsl]}"

address[winhost]=$( hostname ).local
printf "# Your Windows hostname is:  %s\n" "${address[winhost]}"

grep nameserver /etc/resolv.conf
address[nameserver]=$( grep nameserver /etc/resolv.conf | awk '{ print $2 }' )
printf "# Your nameserver is:        %s\n" "${address[nameserver]}"

address[dig]=$( dig +short $( hostname ).local A | head -1 )
printf "# Win IP by 'dig' is:        %s\n" "${address[dig]}"
dig +short $( hostname ).local A

printf "# The command 'ip route' säger:\n%s\n" "$( ip route )"

address[localhost]="127.0.0.1"

# # Try to connect
# PORT=${1:-3306} 
# printf "\n##########################################################\n"
# printf "# Try to connect to the MariaDB server on port %s\n" "$PORT"
# for i in "${!address[@]}"
# do
#     printf "* %s: %s\n" "$i" "${address[$i]}"
#     nc -zv "${address[$i]}" "$PORT"
# done


