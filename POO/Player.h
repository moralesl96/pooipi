#ifndef PLAYER_H_INCLUDED
#define PLAYER_H_INCLUDED

#include "GameObject.h"

class Player : public GameObject
{
public:
 void load(int x, int y, int width, int height, std::string textureID);
 void update();
 void moving(int x, int y);
 void clean() {};
};

#endif // PLAYER_H_INCLUDED
