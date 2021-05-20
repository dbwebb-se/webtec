#
# Check if the git tag is between two versions
# >=@arg2 and <@arg3
#
# @arg1 string the path to the dir to check.
# @arg2 string the lowest version number to check.
# @arg3 string the highest version number to check.
#
hasGitTagBetween()
{
    local where="$1"
    local low=
    local high=
    local semTag=

    low=$( getSemanticVersion "$2" )
    high=$( getSemanticVersion "$3" )
    #echo "Validate that tag exists >=$2 and <$3 ."

    local success=false
    local highestTag=0
    local highestSemTag=0

    if [ -d "$where" ]; then
        while read -r tag; do
            semTag=$( getSemanticVersion "$tag" )
            #echo "trying tag $tag = $semTag"
            if [ $semTag -ge $low -a $semTag -lt $high ]; then
                #echo "success with $tag"
                success=
                if [ $semTag -gt $highestSemTag ]; then
                    highestTag=$tag
                    highestSemTag=$semTag
                fi
            fi
        done < <( cd "$where" && git tag )
    fi

    if [ "$success" = "false" ]; then
        return
    fi

    echo $highestTag
}



#
# Convert version to a comparable string
# Works for 1.0.0 and v1.0.0
#
# @arg1 string the version to check.
#
function getSemanticVersion
{
    #local version=${1:1}
    local version=$( echo $1 | sed s/^[vV]// )
    echo "$version" | awk -F. '{ printf("%03d%03d%03d\n", $1,$2,$3); }'
}



#
# Get the main/master branch
#
# @arg1 string the path to the dir to check.
#
function getMainOrMasterBranch
{
    local where="$1"
    local branches=$( cd "$where" && git branch )
    local master=$( cd "$where" && git branch | grep -E 'master|main' | cut -c2- )

    echo $master
}



#
# Add newline if it does not exists.
#
# @arg1 string to add a newline if it does not exists.
#
function addNewline
{
    string=$(printf "%s" "$1"; echo x)
    string=${string%x}
    printf '%s\n' "$string"
}
