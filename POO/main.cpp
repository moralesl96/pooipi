#include<SDL.h>

#include "Game2.h"
#include <iostream>

using namespace std;

Game *g_game = 0;       // our Game object

int main(int argc, char* argv[])
{
 g_game = new Game();
 g_game->init("Chapter 1", 100, 100, 640, 480, 0);
 while(g_game->running())
 {
   g_game->handleEvents();
   g_game->update();  //animation()
   g_game->render();
   SDL_Delay(10);
 }
 g_game->clean();
 return 0;
}
